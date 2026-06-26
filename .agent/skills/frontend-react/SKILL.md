---
name: frontend-react
description: Best practices and standards for building the appi React SPA with JavaScript (JSX), Vite, Tailwind CSS, and React Router. Covers component architecture, API integration, Context + Hooks state management, project conventions, and code quality.
compatibility: opencode
metadata:
  audience: frontend
  tech: react-vite-tailwind
---

# Frontend React — appi SPA Guidelines

## Technology Stack

- **Framework**: React 18+ with **JavaScript (JSX)** — the project uses `.jsx`/`.js` files, **not TypeScript**. There is no `tsconfig.json` and no TS compiler installed.
- **Build Tool**: Vite 5+
- **Styling**: Tailwind CSS 3+ (utility-first)
- **Routing**: React Router v6 (lazy-loaded pages)
- **HTTP Client**: Axios (instance-based with JWT interceptor)
- **State Management**: React Context + `useReducer` for global state; `useState` for local

The React **Admin** SPA lives in `/ui` at the project root. It communicates with the CI4 API backend exclusively via JSON over HTTP. User-facing apps are **separate React apps in separate repositories** — they connect to the same appi API but are not hosted here.

## Project Structure

```
ui/
├── index.html
├── vite.config.js
├── tailwind.config.js
├── src/
│   ├── main.jsx                    # Entry point, providers, router setup
│   ├── App.jsx                     # Root component with RouterProvider
│   ├── contexts/                   # React Context providers
│   │   ├── AuthContext.jsx
│   │   ├── SettingsContext.jsx
│   │   ├── ModuleContext.jsx
│   │   └── ThemeContext.jsx
│   ├── hooks/                      # Custom React hooks
│   │   ├── useApi.js
│   │   ├── useAuth.js
│   │   ├── useSettings.js
│   │   ├── usePagination.js
│   │   └── useDebounce.js
│   ├── services/                   # API service layer
│   │   ├── api.js                  # Axios instance + interceptors
│   │   ├── authService.js
│   │   ├── moduleService.js
│   │   └── settingsService.js
│   ├── components/                 # Shared UI components
│   │   ├── ui/                     # Primitive UI kit (Button, Input, Modal, etc.)
│   │   ├── layout/                 # Layout components (Sidebar, Header, MainLayout)
│   │   ├── guards/                 # Route guards (PrivateRoute, RoleGuard)
│   │   └── common/                 # Shared business components
│   ├── pages/                      # Route-level page components
│   │   ├── LoginPage.jsx
│   │   ├── DashboardPage.jsx
│   │   └── NotFoundPage.jsx
│   ├── modules/                    # Auto-scanned module UI (loaded from app/Modules/*/ui)
│   │   └── (generated at build time by Vite glob)
│   └── utils/                      # Pure utility functions
│       ├── formatters.js
│       ├── validators.js
│       └── permissions.js
```

## Code Conventions

- **Functional components only** — no class components
- **JSDoc comments** for shared functions and hook return types (optional but encouraged)
- Keep components small and single-responsibility
- **No `any` workarounds** — handle unknown API shapes with safe defaults and optional chaining
- Prop validation via `PropTypes` is optional but welcome for shared components

```jsx
// Good — clear, documented hook
/**
 * @param {string} url
 * @returns {{ data: any, loading: boolean, error: string|null }}
 */
export function useApi(url) {
  // ...
}

// Good — descriptive prop names
export function ContactsTable({ contacts, currentUser }) {
  return (
    <table className="min-w-full">
      <tbody>
        {contacts.map((contact) => (
          <ContactRow key={contact.id} contact={contact} />
        ))}
      </tbody>
    </table>
  );
}
```

## React Best Practices

### Component Patterns

- **Functional components only** — no class components
- Co-locate styles, sub-components, and tests with the component
- Keep components small and single-responsibility

```tsx
// Page component — fetches data, passes to UI components
export default function ContactsListPage() {
  const { user } = useAuth();
  const { data, loading } = useApi('/api/contacts');

  if (loading) return <Spinner />;
  return <ContactsTable contacts={data} currentUser={user} />;
}

// Presentational component — receives props, renders UI
interface ContactsTableProps {
  contacts: Contact[];
  currentUser: User;
}

function ContactsTable({ contacts, currentUser }: ContactsTableProps) {
  return (
    <table className="min-w-full">
      <thead>...</thead>
      <tbody>
        {contacts.map((contact) => (
          <ContactRow key={contact.id} contact={contact} />
        ))}
      </tbody>
    </table>
  );
}
```

### Hooks Rules

- Only call hooks at the top level (not inside conditions/loops)
- Only call hooks from React functions or custom hooks
- Name custom hooks with `use` prefix
- Keep dependency arrays complete — use `eslint-plugin-react-hooks` to enforce
- Extract complex logic into custom hooks rather than inline in components

```tsx
// Custom hook — encapsulates data fetching + loading state
export function useApi<T>(url: string): { data: T | null; loading: boolean; error: string | null } {
  const [data, setData] = useState<T | null>(null);
  const [loading, setLoading] = useState(true);
  const [error, setError] = useState<string | null>(null);

  useEffect(() => {
    let cancelled = false;
    setLoading(true);

    api.get<Envelope<T>>(url)
      .then((res) => { if (!cancelled) setData(res.data.data); })
      .catch((err) => { if (!cancelled) setError(err.message); })
      .finally(() => { if (!cancelled) setLoading(false); });

    return () => { cancelled = true; };
  }, [url]);

  return { data, loading, error };
}
```

### Memoization

Use `React.memo`, `useMemo`, and `useCallback` intentionally — not preemptively. Profile first, then optimize.

```tsx
// Memoize expensive computations
const sortedContacts = useMemo(
  () => [...contacts].sort((a, b) => a.name.localeCompare(b.name)),
  [contacts]
);

// Memoize callbacks passed to child components
const handleDelete = useCallback(
  (id: number) => deleteContact(id),
  [deleteContact]
);
```

### Code Splitting

Use `React.lazy` + `Suspense` for route-level code splitting:

```tsx
const ContactsListPage = React.lazy(() => import('@/pages/ContactsListPage'));
const ContactFormPage = React.lazy(() => import('@/pages/ContactFormPage'));

function AppRoutes() {
  return (
    <Routes>
      <Route path="/contacts" element={
        <Suspense fallback={<PageSkeleton />}>
          <ContactsListPage />
        </Suspense>
      } />
    </Routes>
  );
}
```

## Vite Configuration

### Path Aliases

```ts
// vite.config.ts
import { defineConfig } from 'vite';
import react from '@vitejs/plugin-react';
import path from 'path';

export default defineConfig({
  base: '/admin/',
  plugins: [react()],
  resolve: {
    alias: {
      '@': path.resolve(__dirname, './src'),
    },
  },
});
```

### Dev Server Proxy

Proxy API requests during development to avoid CORS issues:

```ts
export default defineConfig({
  base: '/admin/',
  server: {
    port: 5173,
    proxy: {
      '/api': {
        target: 'http://localhost:8080',
        changeOrigin: true,
      },
    },
  },
});
```

### Environment Variables

- All env vars must use the `VITE_` prefix
- Define types in `src/vite-env.d.ts`

```ts
/// <reference types="vite/client" />

interface ImportMetaEnv {
  readonly VITE_API_BASE_URL: string;
  readonly VITE_APP_TITLE: string;
}

interface ImportMeta {
  readonly env: ImportMetaEnv;
}
```

### Module UI Scanning

Vite discovers module UI entry points from `app/Modules/*/ui/` directories using a glob import and bundles them into the SPA at build time. Configure in `vite.config.ts`:

```ts
// vite.config.ts
import { defineConfig } from 'vite';
import { globSync } from 'glob';
import react from '@vitejs/plugin-react';
import path from 'path';

// Discover all module UI entry points at build time
const moduleEntries = Object.fromEntries(
  globSync('../app/Modules/*/ui/index.{ts,tsx}').map((file) => [
    file.replace('../app/Modules/', '').replace('/ui/index.ts', '').replace('/ui/index.tsx', '').toLowerCase(),
    path.resolve(__dirname, file),
  ])
);

export default defineConfig({
  base: '/admin/',
  plugins: [react()],
  resolve: {
    alias: { '@': path.resolve(__dirname, './src') },
  },
  build: {
    rollupOptions: {
      input: {
        main: path.resolve(__dirname, 'index.html'),
        ...moduleEntries,  // One chunk per module
      },
    },
  },
  server: {
    port: 5173,
    proxy: {
      '/api': { target: 'http://localhost:8080', changeOrigin: true },
    },
  },
});
```

At runtime, the SPA imports module components dynamically using `React.lazy` keyed to the `component` name from `client_routes` in `module.json`.

## Tailwind CSS Conventions

### Utility-First Approach

- Build components directly in JSX using utility classes
- Avoid custom CSS unless absolutely necessary
- Extract repeated utility patterns into components, not custom CSS

```tsx
// Good — utilities directly in JSX
<button className="inline-flex items-center px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
  Save
</button>

// Prefer components over @apply
function Button({ variant = 'primary', ...props }: ButtonProps) {
  const base = 'inline-flex items-center px-4 py-2 rounded-md focus:outline-none focus:ring-2';
  const variants = {
    primary: 'bg-blue-600 text-white hover:bg-blue-700 focus:ring-blue-500',
    secondary: 'bg-gray-200 text-gray-900 hover:bg-gray-300 focus:ring-gray-400',
    danger: 'bg-red-600 text-white hover:bg-red-700 focus:ring-red-500',
  };
  return <button className={`${base} ${variants[variant]}`} {...props} />;
}
```

### Custom Theme

Define project-specific design tokens in `tailwind.config.ts`:

```ts
export default {
  content: ['./index.html', './src/**/*.{ts,tsx}'],
  theme: {
    extend: {
      colors: {
        brand: {
          50: '#eff6ff',
          500: '#3b82f6',
          600: '#2563eb',
          700: '#1d4ed8',
        },
      },
      fontFamily: {
        sans: ['Inter', 'system-ui', 'sans-serif'],
      },
    },
  },
  plugins: [],
};
```

### `@apply` Usage Policy

- Only use `@apply` for compound utility patterns that repeat identically in 5+ places
- Prefer extracting into a shared component over `@apply`
- Keep `@apply` in component-scoped files, not in `globals.css`

### Responsive Design

- Use Tailwind's responsive prefixes: `sm:`, `md:`, `lg:`, `xl:`, `2xl:`
- Design mobile-first (base styles = mobile, breakpoint prefixes = larger screens)

### Dark Mode

If dark mode is enabled, use the `dark:` variant. Toggle via a class strategy on `<html>`:

```tsx
// tailwind.config.ts
export default { darkMode: 'class' };

// ThemeContext provides dark class toggle
<div className="bg-white dark:bg-gray-900 text-gray-900 dark:text-gray-100">
```

## State Management — Context + Hooks

### Pattern

- Use React Context for global/shared state (auth, settings, theme, modules)
- Use `useReducer` for complex state transitions
- Use `useState` for component-local state
- Each domain gets its own context provider

```jsx
// Initial state
const initialState = { user: null, token: null, loading: false };

function authReducer(state, action) {
  switch (action.type) {
    case 'LOGIN_SUCCESS':
      return { ...state, user: action.payload.user, token: action.payload.token, loading: false };
    case 'LOGOUT':
      return { ...state, user: null, token: null };
    case 'SET_LOADING':
      return { ...state, loading: action.payload };
    default:
      return state;
  }
}

// user shape from /api/auth/me: { id, email, groups, permissions }
const AuthContext = createContext(null);

export function AuthProvider({ children }) {
  const [state, dispatch] = useReducer(authReducer, initialState);

  const login = async (email, password) => {
    dispatch({ type: 'SET_LOADING', payload: true });
    try {
      const res = await authService.login(email, password);
      localStorage.setItem('appi_token', res.token);
      dispatch({ type: 'LOGIN_SUCCESS', payload: res });
    } finally {
      dispatch({ type: 'SET_LOADING', payload: false });
    }
  };

  return (
    <AuthContext.Provider value={{ state, login, logout }}>
      {children}
    </AuthContext.Provider>
  );
}
```

### Custom Hook for Context Access

```jsx
export function useAuth() {
  const context = useContext(AuthContext);
  if (!context) throw new Error('useAuth must be used within AuthProvider');
  return context;
}

// Gate a UI action based on a Shield permission string
// user.permissions comes from GET /api/auth/me response
export function userCan(user, permission) {
  return user?.permissions?.includes(permission) ?? false;
}
```

## API Integration

### Axios Instance

```jsx
// src/services/api.js
import axios from 'axios';

const api = axios.create({
  baseURL: import.meta.env.VITE_API_BASE_URL || '/api',
  headers: { 'Content-Type': 'application/json', Accept: 'application/json' },
});

// Attach JWT token to every request
api.interceptors.request.use((config) => {
  const token = localStorage.getItem('appi_token');
  if (token) config.headers.Authorization = `Bearer ${token}`;
  return config;
});

// Handle 401 globally — redirect to admin login
api.interceptors.response.use(
  (response) => response,
  (error) => {
    if (error.response?.status === 401) {
      localStorage.removeItem('appi_token');
      // The admin SPA is served under /admin/* — login is at /admin/login
      window.location.href = '/admin/login';
    }
    return Promise.reject(error);
  }
);

export default api;
```

### Service Functions

```jsx
// src/services/authService.js
import api from './api';

/**
 * @param {string} email
 * @param {string} password
 * @returns {Promise<{token: string, expires_in: number, user: object}>}
 */
export async function login(email, password) {
  const { data } = await api.post('/auth/login', { email, password });
  // Response shape: { status, token, expires_in, user: { id, email } }
  return data;
}
```

### Standard API Response Envelope

```js
// All CI4 API responses follow this envelope:
// Success list:   { status: 'success', data: [...], pagination: {...} }
// Success single: { status: 'success', data: {...} }
// Created:        { status: 'created', id: 42 }
// Validation err: { status: 'error', errors: { field: 'message' } }  (HTTP 422)
// Auth error:     { status: 'error', message: '...' }                (HTTP 401)
// Forbidden:      { status: 'error', message: '...' }                (HTTP 403)
```

## Routing

### Setup

```jsx
// src/main.jsx
import { createBrowserRouter, RouterProvider } from 'react-router-dom';

const router = createBrowserRouter([
  {
    path: '/admin/login',
    element: <LoginPage />,
  },
  {
    path: '/',
    element: <PrivateRoute><MainLayout /></PrivateRoute>,
    children: [
      { index: true, element: <Navigate to="/dashboard" /> },
      { path: 'dashboard', element: <React.Suspense fallback={<PageSkeleton />}><DashboardPage /></React.Suspense> },
      // Dynamic module routes injected at boot
    ],
  },
  { path: '*', element: <NotFoundPage /> },
]);
```

### Auth Guard

```jsx
function PrivateRoute({ children }) {
  const { state } = useAuth();
  const location = useLocation();

  if (state.loading) return <FullPageSpinner />;
  if (!state.token) return <Navigate to="/admin/login" state={{ from: location }} replace />;

  return <>{children}</>;
}
```

### Dynamic Module Routes

Module routes are registered at boot from the `/api/modules` manifest (see `react-ui.md` for full contract).

## Error Handling

### Error Boundaries

Wrap each route-level page with an error boundary to prevent the entire SPA from crashing:

```jsx
class PageErrorBoundary extends React.Component {
  state = { hasError: false };

  static getDerivedStateFromError() {
    return { hasError: true };
  }

  render() {
    if (this.state.hasError) return this.props.fallback ?? <ErrorPage />;
    return this.props.children;
  }
}
```

### API Error Handling

- 422 errors: display field-level validation errors on the form
- 403 errors: show "access denied" message
- Network errors: show retry toast/banner
- Use try/catch at the call site, not in interceptors

## Testing (Recommended)

- **Vitest** (bundled with Vite) as the test runner
- **React Testing Library** for component tests
- **MSW** (Mock Service Worker) for API mocking
- **vitest-ui** for test debugging
- Co-locate test files next to the component: `Component.test.jsx`

```jsx
// ContactsTable.test.jsx
import { render, screen } from '@testing-library/react';
import { describe, it, expect } from 'vitest';
import ContactsTable from './ContactsTable';

const mockContacts = [
  { id: 1, name: 'Alice', email: 'alice@example.com' },
];

describe('ContactsTable', () => {
  it('renders contact names', () => {
    render(<ContactsTable contacts={mockContacts} />);
    expect(screen.getByText('Alice')).toBeDefined();
  });
});
```

## Code Quality

### Linting

- ESLint with `eslint-plugin-react` and `eslint-plugin-react-hooks`
- `eslint-plugin-react-hooks` (exhaustive-deps rule is ERROR)
- `eslint-plugin-tailwindcss` (class order consistency)
- Prettier for formatting (trailing commas, single quotes, 100-char print width)

### Conventions

- **Naming**: PascalCase for components, camelCase for hooks/functions/variables, UPPER_CASE for constants
- **File names**: PascalCase for components (`Button.jsx`), camelCase for hooks/services (`useAuth.js`, `authService.js`)
- **Exports**: Default export for page components, named exports for everything else
- **Imports order**: React → third-party → absolute `@/` → relative
- **No barrel files** (`index.js` that re-export) for shared components — import directly

### Performance

- Monitor bundle size with `vite-plugin-visualizer`
- Enable tree-shaking — avoid side-effect imports
- Lazy-load all route-level components
- Use proper `key` props in lists (stable, unique IDs, not array indices)
- Avoid prop drilling — use Context for deeply nested state

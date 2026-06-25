---
name: frontend-react
description: Best practices and standards for building the appi React SPA with TypeScript, Vite, Tailwind CSS, and React Router. Covers component architecture, API integration, Context + Hooks state management, project conventions, and code quality.
compatibility: opencode
metadata:
  audience: frontend
  tech: react-vite-tailwind
---

# Frontend React — appi SPA Guidelines

## Technology Stack

- **Framework**: React 18+ with TypeScript (strict mode)
- **Build Tool**: Vite 5+
- **Styling**: Tailwind CSS 3+ (utility-first)
- **Routing**: React Router v6 (lazy-loaded pages)
- **HTTP Client**: Axios (instance-based with JWT interceptor)
- **State Management**: React Context + `useReducer` for global state; `useState` for local

The React SPA lives in `/ui` at the project root. It communicates with the CI4 API backend exclusively via JSON over HTTP.

## Project Structure

```
ui/
├── index.html
├── vite.config.ts
├── tailwind.config.ts
├── tsconfig.json
├── src/
│   ├── main.tsx                    # Entry point, providers, router setup
│   ├── App.tsx                     # Root component with RouterProvider
│   ├── vite-env.d.ts
│   ├── types/                      # Shared TypeScript types
│   │   ├── api.ts                  # API response envelope types
│   │   ├── auth.ts                 # Auth-related types
│   │   ├── module.ts               # Module manifest types
│   │   └── common.ts               # Shared domain types
│   ├── contexts/                   # React Context providers
│   │   ├── AuthContext.tsx
│   │   ├── SettingsContext.tsx
│   │   ├── ModuleContext.tsx
│   │   └── ThemeContext.tsx
│   ├── hooks/                      # Custom React hooks
│   │   ├── useApi.ts
│   │   ├── useAuth.ts
│   │   ├── useSettings.ts
│   │   ├── usePagination.ts
│   │   └── useDebounce.ts
│   ├── services/                   # API service layer
│   │   ├── api.ts                  # Axios instance + interceptors
│   │   ├── authService.ts
│   │   ├── moduleService.ts
│   │   └── settingsService.ts
│   ├── components/                 # Shared UI components
│   │   ├── ui/                     # Primitive UI kit (Button, Input, Modal, etc.)
│   │   ├── layout/                 # Layout components (Sidebar, Header, MainLayout)
│   │   ├── guards/                 # Route guards (PrivateRoute, RoleGuard)
│   │   └── common/                 # Shared business components
│   ├── pages/                      # Route-level page components
│   │   ├── LoginPage.tsx
│   │   ├── DashboardPage.tsx
│   │   └── NotFoundPage.tsx
│   ├── modules/                    # Feature modules (auto-scanned by Vite)
│   │   └── contacts/
│   │       ├── pages/
│   │       ├── components/
│   │       ├── hooks/
│   │       └── index.ts
│   ├── utils/                      # Pure utility functions
│   │   ├── formatters.ts
│   │   ├── validators.ts
│   │   └── permissions.ts
│   └── styles/
│       └── globals.css             # Tailwind directives + global styles
```

## TypeScript Conventions

- **Strict mode** enabled in `tsconfig.json` (`"strict": true`)
- **No `any` type** — use `unknown` and type guards when the type is uncertain
- **Explicit return types** on hook functions and component props
- **No implicit `any`** — `noImplicitAny` is enforced
- Define shared types in `src/types/` — co-locate module-specific types within the module folder
- Use `interface` for public API shapes (props, service responses) and `type` for unions/aliases

```tsx
// Good
interface UserProps {
  id: number;
  name: string;
  email: string;
}

export function useUser(id: number): { user: User | null; loading: boolean } {
  // ...
}

// Bad
export function useUser(id: any): any {
  // ...
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

    api.get<T>(url)
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

Vite discovers module UI entry points from `app/Modules/*/ui/` directories and bundles them into the SPA at build time (configured in `vite.config.ts`).

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

```tsx
interface AuthState {
  user: User | null;
  token: string | null;
  loading: boolean;
}

type AuthAction =
  | { type: 'LOGIN_SUCCESS'; payload: { user: User; token: string } }
  | { type: 'LOGOUT' }
  | { type: 'SET_LOADING'; payload: boolean };

function authReducer(state: AuthState, action: AuthAction): AuthState {
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

const AuthContext = createContext<{
  state: AuthState;
  login: (email: string, password: string) => Promise<void>;
  logout: () => void;
} | null>(null);

export function AuthProvider({ children }: { children: React.ReactNode }) {
  const [state, dispatch] = useReducer(authReducer, initialState);

  const login = async (email: string, password: string) => {
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

```tsx
export function useAuth(): { state: AuthState; login: (email: string, password: string) => Promise<void>; logout: () => void } {
  const context = useContext(AuthContext);
  if (!context) throw new Error('useAuth must be used within AuthProvider');
  return context;
}
```

## API Integration

### Axios Instance

```tsx
// src/services/api.ts
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

// Handle 401 globally
api.interceptors.response.use(
  (response) => response,
  (error) => {
    if (error.response?.status === 401) {
      localStorage.removeItem('appi_token');
      window.location.href = '/login';
    }
    return Promise.reject(error);
  }
);

export default api;
```

### Typed Service Functions

```tsx
// src/services/authService.ts
import api from './api';

interface LoginResponse {
  token: string;
  expires_in: number;
  user: User;
}

export async function login(email: string, password: string): Promise<LoginResponse> {
  const { data } = await api.post<Envelope<LoginResponse>>('/auth/login', { email, password });
  return data.data;
}
```

### Standard API Envelope Types

```tsx
// src/types/api.ts
interface Envelope<T> {
  status: 'success' | 'created' | 'deleted' | 'error';
  data: T;
  pagination?: {
    current_page: number;
    per_page: number;
    total_records: number;
    total_pages: number;
  };
}

interface ErrorEnvelope {
  status: 'error';
  message: string;
  errors?: Record<string, string>;
  code: number;
}
```

## Routing

### Setup

```tsx
// src/main.tsx
import { createBrowserRouter, RouterProvider } from 'react-router-dom';

const router = createBrowserRouter([
  {
    path: '/login',
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

```tsx
function PrivateRoute({ children }: { children: React.ReactNode }) {
  const { state } = useAuth();
  const location = useLocation();

  if (state.loading) return <FullPageSpinner />;
  if (!state.token) return <Navigate to="/login" state={{ from: location }} replace />;

  return <>{children}</>;
}
```

### Dynamic Module Routes

Module routes are registered at boot from the `/api/modules` manifest (see `react-ui.md` for full contract).

## Error Handling

### Error Boundaries

Wrap each route-level page with an error boundary to prevent the entire SPA from crashing:

```tsx
class PageErrorBoundary extends React.Component<
  { children: React.ReactNode; fallback?: React.ReactNode },
  { hasError: boolean }
> {
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
- Co-locate test files next to the component: `Component.test.tsx`

```tsx
// ContactsTable.test.tsx
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

- ESLint with `@typescript-eslint` rules
- `eslint-plugin-react-hooks` (exhaustive-deps rule is ERROR)
- `eslint-plugin-tailwindcss` (class order consistency)
- Prettier for formatting (trailing commas, single quotes, 100-char print width)

### Conventions

- **Naming**: PascalCase for components and types, camelCase for hooks/functions/variables, UPPER_CASE for constants
- **File names**: PascalCase for components (`Button.tsx`), camelCase for hooks/services (`useAuth.ts`, `authService.ts`)
- **Exports**: Default export for page components, named exports for everything else
- **Imports order**: React → third-party → absolute `@/` → relative
- **No barrel files** (`index.ts` that re-export) for shared components — import directly

### Performance

- Monitor bundle size with `vite-plugin-visualizer`
- Enable tree-shaking — avoid side-effect imports
- Lazy-load all route-level components
- Use proper `key` props in lists (stable, unique IDs, not array indices)
- Avoid prop drilling — use Context for deeply nested state

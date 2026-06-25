# React SPA Contract

How the React SPA (admin UI and user-facing UIs) communicates with the CI4 appi backend. The CI4 app serves **only JSON**.

## Hosting Modes

The React SPA can run in two modes:

| Mode | React Origin | CI4 Origin | CORS Needed | Description |
|------|-------------|------------|-------------|-------------|
| **Development** | `localhost:5173` (Vite dev server) | `localhost:8080` | Yes | Hot module replacement, rapid iteration |
| **Production** | Same origin as CI4 (served from `public/`) | Same origin | No | Vite builds to `public/`, fallback route serves `index.html` |

The React codebase lives in `/ui` at the project root and is fully decoupled from the API regardless of mode.

## Architecture Overview

```
┌─────────────────────────────┐       CORS + JWT      ┌────────────────────────────┐
│   React SPA (admin UI)      │ ──────────────────────► │  CI4 appi (API backend)    │
│   e.g. https://admin.app    │                         │  e.g. https://api.app      │
│                             │ ◄──────────────────────  │                            │
│  React Router               │    JSON responses only   │  ResourceControllers       │
│  Module manifest consumer   │                          │  Shield JWT auth           │
│  Dynamic form renderer      │                          │  Module API routes         │
│  Dashboard                  │                          │  module.json manifests     │
└─────────────────────────────┘                         └────────────────────────────┘
```

## Authentication Flow

### 1. Login

```
POST /api/auth/login
Content-Type: application/json

{ "email": "user@example.com", "password": "secret" }
```

**Response:**
```json
{
  "status": "success",
  "token": "<JWT>",
  "expires_in": 3600,
  "user": { "id": 1, "email": "user@example.com", "name": "Daniel" }
}
```

### 2. Token Storage (SPA side)

Store the JWT in `localStorage` (simpler) or an `httpOnly` cookie (more secure). For appi, `localStorage` is the default:

```js
// After login
localStorage.setItem('appi_token', response.data.token);

// On logout
localStorage.removeItem('appi_token');
```

### 3. Attaching the Token to Every Request

```js
// Axios interceptor (recommended)
axios.interceptors.request.use((config) => {
  const token = localStorage.getItem('appi_token');
  if (token) {
    config.headers.Authorization = `Bearer ${token}`;
  }
  return config;
});
```

### 4. Handling 401 Responses (SPA side)

When the API returns 401, the SPA redirects to the login page:

```js
axios.interceptors.response.use(
  (response) => response,
  (error) => {
    if (error.response?.status === 401) {
      localStorage.removeItem('appi_token');
      window.location.href = '/admin/login';
    }
    return Promise.reject(error);
  }
);
```

> **Note:** The CI4 API **never** redirects — it always returns a JSON 401. The SPA handles the redirect client-side.

## Module Manifest Discovery

At SPA boot, fetch all active module manifests:

```
GET /api/modules
Authorization: Bearer <JWT>
```

**Response:**
```json
{
  "status": "success",
  "data": [
    {
      "slug": "contacts",
      "name": "Contacts",
      "icon": "users",
      "route": "contacts",
      "version": "1.0.0",
      "api_prefix": "api/contacts",
      "nav_group": "crm",
      "client_routes": [...],
      "form_schema": {...},
      "permissions": {...}
    }
  ]
}
```

The SPA uses this to dynamically:
1. **Register React Router routes** from `client_routes`
2. **Render sidebar navigation** from `slug`, `name`, `icon`, `nav_group`
3. **Render forms** from `form_schema`
4. **Gate UI elements** based on `permissions` and the logged-in user's Shield permissions

## React Router — Dynamic Route Registration

```jsx
// Boot: fetch manifests, register routes dynamically
const modules = await api.get('/api/modules');

const moduleRoutes = modules.data.data.flatMap((mod) =>
  mod.client_routes.map((route) => ({
    path: route.path,
    element: <DynamicModule component={route.component} module={mod} />,
    permissions: route.permissions,
  }))
);
```

Each `client_routes` entry maps to a React component:

| `client_routes[].component` | Rendered React Component |
|----------------------------|--------------------------|
| `ContactsList` | `modules/contacts/ContactsList.jsx` |
| `ContactForm` | `modules/contacts/ContactForm.jsx` |

## Standard API Response Envelope

All CI4 API responses follow this envelope:

```json
// Success — list
{ "status": "success", "data": [...], "pagination": { "current_page": 1, "per_page": 20, "total_records": 125, "total_pages": 7 } }

// Success — single resource
{ "status": "success", "data": { "id": 1, "name": "Daniel" } }

// Created
{ "status": "created", "id": 42 }

// Deleted
{ "status": "deleted" }

// Validation error (422)
{ "status": "error", "errors": { "email": "The email field is required." } }

// Auth error (401)
{ "status": "error", "message": "Unauthenticated." }

// Forbidden (403)
{ "status": "error", "message": "Forbidden." }

// Not found (404)
{ "status": "error", "message": "Resource not found." }

// Server error (500)
{ "status": "error", "message": "An unexpected error occurred." }
```

### SPA-side Error Handling

```js
try {
  const { data } = await api.post('/api/contacts', payload);
  // data.status === 'created'
} catch (error) {
  if (error.response?.status === 422) {
    setErrors(error.response.data.errors); // field-level errors
  } else {
    showGlobalError(error.response?.data?.message);
  }
}
```

## Dynamic Form Rendering

The SPA reads `module.json → form_schema.fields` to render forms without hardcoded JSX:

```json
{
  "form_schema": {
    "fields": [
      { "key": "first_name", "label": "First Name", "type": "text", "required": true },
      { "key": "notes",      "label": "Notes",      "type": "textarea", "required": false }
    ]
  }
}
```

```jsx
// Generic form renderer
{module.form_schema.fields.map((field) => (
  <FormField key={field.key} field={field} value={form[field.key]} onChange={handleChange} />
))}
```

See `module-schema.md` for all supported field types.

## Permissions — UI Gating

The SPA gates UI elements based on the authenticated user's Shield permissions:

```jsx
// After login, fetch user permissions
const { data } = await api.get('/api/auth/me');
// { permissions: ['contacts.view', 'contacts.create', ...] }

// Gate a UI action
{userCan('contacts.create') && <Button onClick={handleNew}>Add Contact</Button>}
```

```
GET /api/auth/me
Authorization: Bearer <JWT>
```

**Response:**
```json
{
  "status": "success",
  "data": {
    "id": 1,
    "email": "user@example.com",
    "groups": ["admin"],
    "permissions": ["contacts.view", "contacts.create", "contacts.edit"]
  }
}
```

## Internationalization (i18n)

CI4 language files (`app/Language/<locale>/*.php`) are the source of truth for API-facing strings. The SPA requests strings via:

```
GET /api/lang?locale=es
Authorization: Bearer <JWT>
```

**Response:**
```json
{ "status": "success", "data": { "contacts.title": "Contactos", "contacts.add": "Agregar contacto" } }
```

The SPA stores the locale preference and applies it to all rendered labels.

## CORS Setup

The React SPA is on a different origin. CI4 must allow the SPA origin:

```php
// .env
ALLOWED_ORIGINS=https://admin.yourdomain.com

// app/Config/Cors.php (or CorsFilter)
// Allow: GET, POST, PUT, PATCH, DELETE, OPTIONS
// Allow headers: Content-Type, Authorization, X-Requested-With
// Allow credentials: true
```

For local development:
```
ALLOWED_ORIGINS=http://localhost:5173  # Vite dev server default
```

# appi — Main Application API Guide

This document explains the core API infrastructure of the **appi** application, including authentication, response conventions, and all core system-wide endpoints.

---

## 1. Authentication System
**appi** uses CodeIgniter Shield with **two simultaneous authentication strategies**:

| Strategy | Use Case | Token Lifetime |
|---|---|---|
| **JWT** | React SPA sessions (admin UI + any user-facing SPA) | Short-lived (1h), refreshable via `/api/auth/refresh` |
| **PAT** (Personal Access Token) | Developer API access (scripts, testing, integrations) | Long-lived, manually revoked |

Both strategies use the same `Authorization: Bearer <token>` header. Shield auto-detects token type.

### Security Headers
Every request to a protected `/api/*` route must include:

| Header | Value |
| :--- | :--- |
| `Authorization` | `Bearer <token>` (JWT or PAT) |
| `Accept` | `application/json` |
| `Accept-Language` | Locale code, e.g. `en`, `es`, `pt` — controls translated strings in responses |
| `Content-Type` | `application/json` (for POST/PUT requests) |

### Obtaining a JWT Token
- **`POST /api/auth/login`**: Body `{ "email": "...", "password": "..." }`. Returns `token` (JWT) and `expires_in` (seconds).
- **`POST /api/auth/refresh`**: Body `{ "token": "<expired-or-valid-jwt>" }`. Returns a new JWT. Use before expiry to maintain sessions.
- **`POST /api/auth/logout`**: Revokes the current token. Requires `Authorization: Bearer <token>`.

### Issuing a PAT for Developers
PATs are created via the admin API. They do not expire unless revoked:
```
POST /api/users/{id}/tokens
Authorization: Bearer <admin-jwt>
{ "name": "My Dev Token" }
```
Response: `{ "status": "created", "data": { "raw_token": "<PAT>", "name": "My Dev Token" } }`

Store the `raw_token` securely — it is only shown once.

---

## 2. Response Formats & Error Handling

All API endpoints return JSON.

### Standard Success Response
```json
{
    "status": "success",
    "data": { ... }
}
```

### Standard Paginated Response
```json
{
    "status": "success",
    "data": [ ... ],
    "pagination": {
        "current_page": 1,
        "per_page": 20,
        "total_records": 125,
        "total_pages": 7
    }
}
```

### Error Responses
| Code | Meaning |
|---|---|
| `401 Unauthorized` | Token missing, expired, or invalid |
| `403 Forbidden` | Authenticated but lacking required permission |
| `404 Not Found` | Resource or endpoint does not exist |
| `422 Unprocessable Entity` | Validation failed — returns field-level errors |
| `429 Too Many Requests` | Rate limit exceeded |
| `500 Internal Server Error` | Unexpected server error |

#### Example Validation Error (422)
```json
{
    "status": "error",
    "code": 422,
    "message": "Validation failed",
    "errors": {
        "email": "The email field must contain a unique value.",
        "password": "The password field is required."
    }
}
```

---

## 3. Core System Endpoints

### Auth Endpoints

| Endpoint | Method | Auth | Guard | Description |
|---|---|---|---|---|
| `/api/auth/login` | POST | No | — | Authenticate, returns JWT |
| `/api/auth/refresh` | POST | No | — | Exchange token for new JWT |
| `/api/auth/logout` | POST | Yes | — | Revoke current token |
| `/api/auth/me` | GET | Yes | — | Return current user + permissions |

#### GET /api/auth/me
```json
{
    "status": "success",
    "data": {
        "id": 1,
        "username": "admin",
        "email": "admin@example.com",
        "groups": ["admin"],
        "permissions": ["contacts.view", "contacts.create", "admin.settings"]
    }
}
```

---

### GET /api/modules
**Auth**: Yes | **Guard**: `jwtAuth`

Returns all active module manifests, discovered dynamically by globbing `app/Modules/*/module.json`. The React SPA calls this at boot to register routes, build navigation, and gate UI elements.

```json
{
    "status": "success",
    "data": [
        {
            "slug": "contacts",
            "name": "Contacts",
            "icon": "users",
            "route": "contacts",
            "api_prefix": "api/contacts",
            "nav_group": "crm",
            "order": 1,
            "version": "1.0.0",
            "client_routes": [ ... ],
            "form_schema": { ... },
            "permissions": { ... },
            "status": "active"
        }
    ]
}
```

> **No module name is hardcoded** in `ModuleController`. It reads only from `app/Modules/*/module.json` at runtime and filters by `"status": "active"`.

---

### GET/PUT /api/settings
**Auth**: GET — No | PUT — Yes | **Guard**: PUT requires `admin.settings` permission

Exposes system-wide settings, formatting parameters, and branding info.

```json
{
    "status": "success",
    "data": {
        "company_name": "appi Inc.",
        "app_logo_url": "http://localhost:8080/uploads/branding/logo.png",
        "default_locale": "en",
        "date_format": "YYYY-MM-DD",
        "time_format": "HH:mm:ss",
        "currency": "USD",
        "thousand_separator": ",",
        "decimal_separator": "."
    }
}
```

---

### GET /api/lang
**Auth**: Yes | **Guard**: `jwtAuth`

Returns merged system + all active module translation strings for a given locale.

**Query params**: `?locale=es` — or omit to use the `Accept-Language` request header.

Fallback chain: `Accept-Language` header → `?locale=` param → app default locale.

```json
{
    "status": "success",
    "data": {
        "App": {
            "login": "Iniciar sesión",
            "logout": "Cerrar sesión"
        },
        "Contacts": {
            "title": "Contactos",
            "saved": "Contacto guardado correctamente"
        }
    }
}
```

---

### /api/users — User Management
**Auth**: Yes | **Guard**: `group:admin,superadmin`

Built on Shield's `UserModel`. Provides standard CRUD for user administration.

| Method | Path | Permission | Description |
|---|---|---|---|
| GET | `/api/users` | `group:admin` | List all users with groups |
| POST | `/api/users` | `users.create` | Create new user |
| GET | `/api/users/{id}` | `group:admin` | Get single user |
| PUT | `/api/users/{id}` | `users.edit` | Update user (name, email, groups) |
| DELETE | `/api/users/{id}` | `users.delete` | Delete user |
| POST | `/api/users/{id}/tokens` | `users.manage-admins` | Issue PAT for developer |
| DELETE | `/api/users/{id}/tokens/{tokenId}` | `users.manage-admins` | Revoke PAT |

**POST /api/users — Request Body:**
```json
{
    "email": "newuser@example.com",
    "username": "newuser",
    "password": "securepassword",
    "password_confirm": "securepassword",
    "groups": ["user"]
}
```

**GET /api/users — Response:**
```json
{
    "status": "success",
    "data": [
        {
            "id": 1,
            "email": "admin@example.com",
            "username": "admin",
            "groups": ["superadmin"],
            "created_at": "2026-01-01T00:00:00Z"
        }
    ],
    "pagination": { "current_page": 1, "per_page": 20, "total_records": 5, "total_pages": 1 }
}
```

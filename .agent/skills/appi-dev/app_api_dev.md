# appi — Main Application API Guide

This document explains the core API infrastructure of the **appi** application, including authentication, response conventions, and core system-wide endpoints.

---

## 1. Authentication System
**appi** uses CodeIgniter Shield's **JSON Web Tokens (JWT)** for all API authentication, ensuring stateless and secure operations for both the Admin UI and external client applications.

### Security Headers
Every request to a protected `/api/*` route must include these headers:

| Header | Value |
| :--- | :--- |
| `Authorization` | `Bearer <YOUR_JWT_TOKEN>` |
| `Accept` | `application/json` |
| `Accept-Language` | `<locale>` (e.g., `en`, `es`, or `pt` to request localized responses) |

### Obtaining a Token
Authentication is performed against the auth endpoints:
- **`POST /api/auth/login`**: Takes a JSON body containing `email` and `password`. Returns a JSON object with `token` (JWT) and `expires_in` (seconds).
- **`POST /api/auth/logout`**: Revokes the current token. Requires Bearer Token authorization header.

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
The API maps internal exceptions to standard HTTP response codes:
- `401 Unauthorized`: Token is missing, expired, or invalid.
- `403 Forbidden`: Authenticated, but lacking permissions for the specific resource.
- `404 Not Found`: The requested resource or endpoint does not exist.
- `422 Unprocessable Entity`: Form validation failed. Returns specific field errors.
- `500 Internal Server Error`: An unexpected server error occurred.

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

### GET /api/settings
Exposes system-wide settings, formatting parameters, and branding info to the React frontend.
**Example Response:**
```json
{
    "status": "success",
    "data": {
        "company_name": "appi Inc.",
        "app_logo_url": "http://localhost:8080/uploads/branding/logo.png",
        "app_favicon_url": "http://localhost:8080/uploads/branding/favicon.ico",
        "default_locale": "en",
        "date_format": "YYYY-MM-DD",
        "time_format": "HH:mm:ss",
        "currency": "USD",
        "thousand_separator": ",",
        "decimal_separator": ".",
        "ai_enabled": true
    }
}
```

### GET /api/lang?locale={locale}
Returns a merged JSON structure containing system and module translation strings for the given locale.
**Example Response:**
```json
{
    "status": "success",
    "data": {
        "App": {
            "login": "Login",
            "logout": "Logout"
        },
        "Contacts": {
            "title": "Contactos",
            "saved": "Contacto guardado correctamente"
        }
    }
}
```

### GET /api/auth/me
Returns details of the currently authenticated user based on the Bearer JWT.
**Example Response:**
```json
{
    "status": "success",
    "data": {
        "id": 1,
        "username": "admin",
        "email": "admin@example.com",
        "groups": ["admin"],
        "permissions": ["contacts.view", "contacts.create", "settings.manage"]
    }
}
```



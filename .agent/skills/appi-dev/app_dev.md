---
name: appi-developer
description: Core architecture, design patterns, and development guidelines for the appi application (CI4 API + React SPA).
---

# appi Development Guide

You are an AI assistant working on the **appi** codebase. This document outlines the architecture, technologies, and conventions you MUST follow when developing or modifying features for this project.

## 🧠 Development Philosophy

**Don't reinvent the wheel — lean on CI4 standards.** This app is primarily a UI over standard CodeIgniter 4 tools. Favor built-in CI4 solutions:
- `spark` commands for scaffolding, migrations, seeders, generators
- Shield for authentication and authorization (JWT, groups, permissions)
- CI4 `Model` / `Entity` / `Validation` for data and input handling
- `Service` layer via the services container
- CI4 Events for cross-module communication
- CI4 `ResourceController` for RESTful JSON endpoints
- Migrations and seeders for database management

Avoid custom framework-like abstractions: custom DI containers, custom query builders, custom auth systems, custom CLI commands that duplicate spark. If CI4 provides it, use it. Reinvention should be a last resort, not a default.

---

## 🛠️ Technology Stack

- **Backend Framework**: CodeIgniter 4 (PHP 8.2+) acting strictly as a RESTful JSON API.
- **Database**: SQLite 3 (default), configured with WAL journal mode (`PRAGMA journal_mode = WAL`) for concurrent multi-user read/write access.
- **Authentication**: CodeIgniter Shield configured to use JWT (JSON Web Tokens) or Personal Access Tokens (Bearer Tokens) for stateless, API-first authentication.
- **Frontend**: React SPA (Single Page Application) built with Vite, React Router, and styled with Vanilla CSS modules or Tailwind CSS.
- **Hosting & Bundling**:
  - The React Admin UI codebase resides in the `/ui` directory at the project root.
  - **Development**: Vite dev server runs on `localhost:5173` with hot module replacement. The CI4 API is on `localhost:8080`. CORS is enabled to allow cross-origin requests between them.
  - **Production**: Vite compiles the React codebase at build time, outputting the build artifacts (`index.html`, JS, CSS) directly into CI4's `public/` directory. A fallback route in `app/Config/Routes.php` serves the React entrypoint (`public/index.html`) for all non-API admin routes (`/admin/*`). Since both are served from the same origin, CORS is not needed for production.
  - The React SPA is fully decoupled from the API and can be hosted on a separate server in either mode, communicating solely via `/api` REST endpoints.

---

## 🏗️ Architecture & Structure

**appi** uses a decoupled, modular, API-First architecture. All server-side MVC templates, partials, session-based redirects, and PHP-rendered views are deprecated and prohibited.

### Decoupling & Modular React UI
1. **API-First Design**: The backend contains no HTML rendering. All controllers extend `CodeIgniter\RESTful\ResourceController` or return JSON.
2. **Modular Code Structure**: Backend module logic lives in `app/Modules/<slug>/`.
3. **Vite Build-Time Scanner**: 
   - Vite is configured to scan the `app/Modules/*/ui` directories at build time.
   - It discovers module-specific React entry points, client routes, and navigation items, automatically compiling them into the central SPA bundle.
4. **Inter-Module Communication**:
   - **Frontend (React)**: React components communicate with module API endpoints (`/api/<module>`) using standard Bearer authorization headers.
   - **Backend (PHP)**: Internal module dependencies are decoupled. Do not call controllers directly. Use the **CI4 Event system** (`Events::trigger()`) for side-effects and cross-module notifications.

### Directory Structure
- **`app/Modules/`**: Business features.
  - Contains `Controllers/`, `Models/`, `Entities/`, `Events/`, `Filters/`, `Services/`, `Config/Routes.php`, and `Database/Migrations/`.
  - Modules **MUST NOT** contain a `Views/` directory or server-side Web controllers.
  - May contain a `ui/` directory with React routes and components scanned by Vite.
- **`ui/`**: React Admin SPA codebase (Vite, React, Tailwind/CSS modules).
- **`app/Services/`**: Core system services registered in `Config/Services.php` (e.g. `SearchService`, `ConfigService`).
- **`app/Controllers/Api/`**: Core system API controllers (Users, Settings, Config, Auth) extending `ApiController`.
- **`public/`**: Web root. Hosts Vite-compiled React bundles (index.html, assets/).

### Standard CI4 Service Layer Pattern

appi uses the **Controller → Service → Model → Entity** pattern — standard CI4 with a thin service layer:

- **Controller**: Validates input, delegates to Service, returns JSON response
- **Service**: Business logic, coordinates Model calls
- **Model**: CI4 `Model` for data access (`find`, `insert`, `update`, `delete`, query builder)
- **Entity**: CI4 `Entity` with `$casts` for JSON serialization

This is the default and only architecture. No Domain/Application/Infrastructure layers, repository interfaces, or port/adapter patterns.

> See [database_conventions.md](./database_conventions.md) for all database naming, migration, and model conventions.

---

## 🧩 Key Systems & Patterns

### 1. Authentication & CORS
- The API is protected by CodeIgniter Shield's JWT/Token authenticator. Every API call must include:
  `Authorization: Bearer <YOUR_TOKEN>`
- The backend configuration includes a `Cors` filter registered globally in `app/Config/Filters.php`. Allowed origins are loaded dynamically from the `.env` file to support the decoupled Users UI.

### 2. Settings & Global Configuration (`/api/settings`)
- System configurations (branding, timezone, formatting settings) are loaded from the `app_config` database table.
- A public API endpoint `GET /api/settings` exposes the active configuration to the React frontend.
- React uses this settings payload to dynamically configure local formatting and styling rules.

### 3. Date & Currency Formatting
- The backend API always transmits raw, standardized values:
  - **Dates/Times**: ISO-8601 strings (e.g., `2026-06-23T18:35:39Z`).
  - **Currencies/Numbers**: Plain floating-point numbers (e.g., `1234.56`).
- Formatting is done **entirely on the client side** by React components using parameters provided by `/api/settings`.

### 4. Client-Side i18n
- Language files live in `app/Language/{locale}/` on the server.
- The API exposes `GET /api/lang?locale={locale}` which merges system and active module translations into a nested JSON structure.
- React UI fetches this structure on load and initializes its internationalization engine (e.g., `i18next`).
- The frontend sends the user's preferred language using the standard HTTP `Accept-Language` header on all API calls.

---

## Environment Configuration (.env)

Below are the required and optional environment variables for appi. Copy `env` to `.env` at the project root:

```ini
# Environment: development, testing, or production
CI_ENVIRONMENT = development

# App base URL (used for link generation in the API)
app.baseURL = http://localhost:8080

# Database (SQLite default for development)
database.default.hostname = localhost
database.default.database = writable/database.db
database.default.DBDriver = SQLite3

# For MySQL/PostgreSQL, uncomment and configure:
# database.default.hostname = localhost
# database.default.username = root
# database.default.password =
# database.default.DBDriver = MySQLi
# database.default.DBPrefix =

# JWT Secret Key (REQUIRED — generate a random 64-char string)
# Generate: php -r 'echo bin2hex(random_bytes(32));'
JWT_SECRET_KEY =

# CORS allowed origins (comma-separated for production, wildcard for dev)
# Development (Vite dev server): http://localhost:5173
# Production (same origin): leave empty
ALLOWED_ORIGINS = http://localhost:5173

# Logging
logger.threshold = 4
```

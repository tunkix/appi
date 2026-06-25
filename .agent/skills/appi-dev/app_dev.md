---
name: appi-developer
description: Core architecture, design patterns, and development guidelines for the appi application (CI4 API backend + React Admin SPA + separate user-facing React apps).
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
- **Authentication**: CodeIgniter Shield with **two layers**:
  - **JWT** (JSON Web Tokens) — primary auth for React SPA sessions (admin UI and user-facing UIs). Stateless, short-lived.
  - **Personal Access Tokens (PAT)** — for developers who need direct, long-lived API access (testing, integrations). Shield supports both simultaneously.
- **Admin SPA**: The React **Admin UI** codebase lives in `/ui` at the project root. It is built with Vite, React Router, and Tailwind CSS.
- **User-facing UIs**: Separate React applications in separate repositories, connecting to this same API over HTTPS. They authenticate with the same JWT/PAT system.
- **Hosting & Bundling**:
  - **Development**: Vite dev server runs on `localhost:5173` with hot module replacement. The CI4 API is on `localhost:8080`. CORS is enabled.
  - **Production (simple)**: Vite builds to `public/`. CI4 `Routes.php` has a static file passthrough for `/admin/*` → `public/index.html`. This is a convenience for simple hosting only — not MVC rendering.
  - **Production (recommended)**: A dedicated web server (nginx/Apache) serves the compiled SPA static files and proxies `/api/*` to CI4. CI4 never serves HTML in this setup.
  - The admin SPA is fully decoupled and can always be hosted on a separate origin.

---

## 🏗️ Architecture & Structure

**appi** uses a decoupled, modular, API-First architecture. All server-side MVC templates, partials, session-based redirects, and PHP-rendered views are **prohibited**.

### Decoupling & Modular React UI
1. **API-First Design**: The backend contains no HTML rendering. All controllers extend `ResourceController` (via `ApiController`) and return JSON only.
2. **Modular Code Structure**: Backend module logic lives in `app/Modules/<Name>/` (PascalCase).
3. **Zero Manual Module Registration**: Modules are **fully self-contained and auto-discovered**:
   - **PHP classes/routes**: CI4's `Config/Modules.php` (`$shouldDiscover = true`) auto-discovers module routes and configs via PSR-4 namespaces. No manual registration in core config files.
   - **API manifests**: `GET /api/modules` dynamically globs `app/Modules/*/module.json` at runtime. No hardcoded module list anywhere in the main app.
   - **React UI**: Vite is configured to glob `app/Modules/*/ui/index.{ts,tsx}` at build time, auto-bundling module UI into the SPA.
4. **Inter-Module Communication**:
   - **Frontend**: React SPA calls module API endpoints (`/api/<slug>`) with a JWT Bearer token.
   - **Backend**: Use the CI4 Event system (`Events::trigger()`) for cross-module side-effects. Never call another module's controller directly.

### Directory Structure
- **`app/Modules/<Name>/`**: Self-contained business features (PascalCase directory name).
  - Contains `Controllers/`, `Models/`, `Entities/`, `Events/`, `Filters/`, `Services/`, `Config/Routes.php`, `Database/Migrations/`, `Language/`.
  - Modules **MUST NOT** contain a `Views/` directory, `redirect()` calls, or any `view()` calls.
  - **MUST** contain a `ui/` directory if the module exposes a React frontend, and a `module.json` manifest.
- **`ui/`**: React Admin SPA (Vite, React, Tailwind CSS).
- **`app/Controllers/Api/`**: Core system API controllers (Auth, Users, Modules, Settings, Lang) extending `ApiController`.
- **`app/Services/`**: Core services registered in `Config/Services.php`.
- **`public/`**: Web root. Hosts Vite-compiled React bundles (`index.html`, `assets/`).

### ApiController — Base for All API Controllers

All application controllers (core and module) extend the shared `ApiController` base class:

```php
<?php
declare(strict_types=1);
namespace App\Controllers\Api;

use CodeIgniter\RESTful\ResourceController;

abstract class ApiController extends ResourceController
{
    protected $format = 'json'; // Always JSON — no view() calls ever
}
```

- Lives at `app/Controllers/Api/ApiController.php`
- Module controllers: `namespace App\Modules\<Name>\Controllers;` extending `App\Controllers\Api\ApiController`
- Core controllers: `namespace App\Controllers\Api;` extending `ApiController`

### Standard CI4 Service Layer Pattern

appi uses the **Controller → Service → Model → Entity** pattern — standard CI4 with a thin service layer:

- **Controller** (thin): Validates input, delegates to Service, returns JSON response
- **Service**: Business logic, coordinates Model calls
- **Model**: CI4 `Model` for data access (`find`, `insert`, `update`, `delete`, query builder)
- **Entity**: CI4 `Entity` with `$casts` for JSON serialization

This is the default and only architecture. No Domain/Application/Infrastructure layers, no repository interfaces.

> See [database_conventions.md](./database_conventions.md) for all database naming, migration, and model conventions.

---

## 🧩 Key Systems & Patterns

### 1. Authentication — JWT + PAT (Dual Strategy)

Shield is configured to support both authenticators simultaneously:

| Strategy | Use Case | Lifetime |
|---|---|---|
| **JWT** | React SPA sessions (admin UI + user-facing UIs) | Short-lived (1h), refreshable |
| **PAT** | Developers needing direct API access (testing, scripts) | Long-lived, revocable |

Every API request must include: `Authorization: Bearer <token>`

The `jwtAuth` filter is applied to all protected API routes (see `app/Config/Routes.php`). CORS is enabled globally for cross-origin SPA requests.

### 2. Module Auto-Discovery (Zero Registration)

Modules are fully plug-and-play. When a new module is placed in `app/Modules/<Name>/`:
- **PHP routes/configs**: Auto-discovered by CI4's namespace discovery (`Config/Modules.php` → `$shouldDiscover = true`)
- **API manifest**: Dynamically included in `GET /api/modules` response (runtime glob of `module.json` files)
- **React UI**: Vite glob picks up `app/Modules/*/ui/index.{ts,tsx}` at build time

**The main app never hardcodes module names anywhere.**

### 3. Users Management (`/api/users`)

Built on Shield's `UserModel` — no custom user system. Expose it through a standard `ResourceController`:
- `GET /api/users` — list users (admin/superadmin only)
- `POST /api/users` — create user
- `PUT /api/users/{id}` — update user
- `DELETE /api/users/{id}` — delete user
- Shield's `UserModel` handles password hashing, group assignment, identity management.
- Protected by `group:admin,superadmin` filter.

### 4. Settings & Global Configuration (`/api/settings`)
- System configurations (branding, timezone, formatting settings) are loaded from the `appi_config` database table.
- `GET /api/settings` — public endpoint, exposes config to any React frontend.
- `PUT /api/settings` — admin-only, updates config.
- React uses this payload to configure local formatting and styling rules.

### 5. Date & Currency Formatting
- The backend always transmits raw, standardized values:
  - **Dates/Times**: ISO-8601 strings (`2026-06-23T18:35:39Z`)
  - **Numbers/Currencies**: Plain floats (`1234.56`)
- All formatting is done **client-side** using parameters from `/api/settings`.

### 6. Client-Side i18n
- Language files live in `app/Language/{locale}/` (core) and `app/Modules/<Name>/Language/{locale}/` (modules).
- `GET /api/lang?locale={locale}` merges system + all active module translations into a flat JSON object.
- React initializes `i18next` (or equivalent) with this payload on boot.
- The SPA sends `Accept-Language: <locale>` on all requests.

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

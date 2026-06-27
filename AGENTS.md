# AGENTS.md

## What this is

CodeIgniter 4 API backend + React 18 SPA frontend. The backend serves JSON at `/api/*` and the SPA at `/admin/*`. SQLite3 (WAL) by default, MySQL-compatible.

## Commands

```bash
composer install                  # install PHP deps
php spark serve                   # dev server at :8080
php spark migrate --all           # run all migrations (system + modules)
php spark shield:user create ...  # create users (see README)

npm install                       # install JS deps
npm run dev                       # Vite dev server at :5173 (proxies /api -> :8080)
npm run build                     # production SPA build -> public/

./vendor/bin/phpunit              # run tests (also: composer test)
```

**Order matters**: `composer install` before `php spark serve`. Migrations must run before API calls that touch the DB.

## Module system

Modules live in `app/Modules/<Name>/`. Each module is auto-discovered:

- **PHP namespace**: `App\Modules\<Name>` — registered by `app/Config/Autoload.php`
- **Routes**: `app/Modules/<Name>/Config/Routes.php` — auto-loaded via CI4 module discovery (`app/Config/Modules.php` aliases include `routes`)
- **Frontend**: `app/Modules/<Name>/ui/index.{js,jsx}` — discovered by the Vite `moduleScanner()` plugin in `vite.config.js`, which generates a virtual `virtual:modules` registry
- **Manifest**: `app/Modules/<Name>/module.json` — defines slug, permissions, client routes, API schema, form schema
- **Migrations**: `app/Modules/<Name>/Database/Migrations/` — included by `php spark migrate --all`

When adding a new module, create the full directory structure including `module.json`, `Config/Routes.php`, and `ui/index.jsx` for the module to be discovered on both sides.

## Route structure

- `app/Config/Routes.php` — core routes (auth, settings, modules, users, SPA fallback)
- Module routes are auto-discovered from `app/Modules/*/Config/Routes.php`
- All `/api/*` routes go through the `cors` filter; most also require `jwtAuth`
- Auth endpoints (`login`, `refresh`) are exempt from JWT; everything else under `/api` needs a Bearer token

## Auth & permissions

- CodeIgniter Shield with JWT (HS256, 1hr TTL)
- Custom `JwtAuthFilter` at `app/Filters/JwtAuthFilter.php` — checks `Authorization: Bearer <token>`
- Groups: `superadmin`, `admin`, `developer`, `user`, `beta` — defined in `app/Config/AuthGroups.php`
- Module permissions must be registered in both `module.json` and `app/Config/AuthGroups.php` (permissions + matrix)

## Database

- SQLite3 file: `writable/database.db` (relative to WRITEPATH) — do not add to `.gitignore`

## Auth behavior

- User registration is **off** by default (`app/Config/Auth.php:156` — `$allowRegistration = false`)
- Email activation after registration is **off** (`$actions['register'] = null`)
- Users must be created via CLI: `php spark shield:user create -e admin@example.com -n admin -g superadmin`

## Testing

- PHPUnit 10.5+/11.2, bootstrap at `system/Test/bootstrap.php`
- Tests use in-memory SQLite3 (`database.tests.database = :memory:`) — auto-switched when `ENVIRONMENT === 'testing'`
- Test DB has `DBPrefix = 'db_'` — do not remove; CI devs depend on it
- Test suite directory: `tests/` (subdirs: `unit/`, `database/`, `session/`, `_support/`)

## Frontend (React SPA)

- Source: `ui/src/` — React 18, React Router 6, i18next, Axios, Tailwind CSS 3
- Path alias: `@` -> `ui/src/` (Vite resolve alias)
- Tailwind content paths include `app/Modules/**/ui/**/*.{js,jsx}` — module UI is scanned for classes
- Production build output: `public/` (served by PHP backend, `emptyOutDir: false`)
- Dev proxy: Vite proxies `/api` to `http://localhost:8080`

## Key env vars (`.env`)

```
CI_ENVIRONMENT = development
app.baseURL = http://localhost:8080
ALLOWED_ORIGINS = http://localhost:5173
```

## Conventions

- PHP: `declare(strict_types=1)` in filters and module files
- Module route groups use `'namespace' => 'App\Modules\<Name>\Controllers'`
- Controllers inherit from `App\Controllers\Api\ApiController` for API endpoints
- Services layer: `app/Services/` (app-level), `app/Modules/<Name>/Services/` (module-level)
- `.env` is mostly commented out — uncomment lines to override defaults from `app/Config/`

# appi

A RESTful JSON API backend for a business administration platform (CRM-like). Built with CodeIgniter 4 and CodeIgniter Shield, designed to be consumed by a React SPA frontend.

## Features

- **JWT Authentication** — Login, refresh, logout, and current user profile via CodeIgniter Shield
- **Role-Based Access Control (RBAC)** — Groups (`superadmin`, `admin`, `developer`, `user`, `beta`) with granular permissions
- **Module Discovery** — Auto-discovers active module manifests (`module.json`) from `app/Modules/*/`
- **Settings Management** — System-wide settings (branding, locale, date/time formats, currency)
- **Internationalization (i18n)** — Merged translation strings from system and all active modules
- **CORS Support** — Configurable allowed origins for SPA integration
- **Modular Architecture** — Each feature as a self-contained module with Controllers, Models, Entities, migrations, and UI metadata
- **Contacts Module** — CRUD management for people and organizations with multiple contact methods (emails, phones, websites)
- **SQLite WAL Mode** — Write-Ahead Logging for better concurrent read/write performance

## Tech Stack

| Layer | Technology |
|---|---|
| Backend | PHP 8.2+, CodeIgniter 4 |
| Auth | CodeIgniter Shield 1.3+ (JWT) |
| Database | SQLite3 (default), MySQL-compatible |
| Testing | PHPUnit 10.5+/11.2 |

## Requirements

- PHP 8.2+ with extensions: `intl`, `mbstring`, `json`, `sqlite3`, `libcurl`
- [Composer](https://getcomposer.org/)

## Installation

```bash
composer install
cp env .env
```

Edit `.env` and set the required values:

```
CI_ENVIRONMENT = development
app.baseURL = http://localhost:8080
JWT_SECRET_KEY = <run: php -r 'echo bin2hex(random_bytes(32));'>
ALLOWED_ORIGINS = http://localhost:5173
```

## Database

SQLite3 is configured by default. To run migrations:

```bash
php spark migrate --all
```

## Running

```bash
php spark serve
```

The API is available at `http://localhost:8080`.

## Testing

```bash
./vendor/bin/phpunit
# or
composer test
```

## API Endpoints

| Method | Path | Auth | Description |
|---|---|---|---|
| GET | `/` | No | Health check |
| POST | `/api/auth/login` | No | Login, returns JWT |
| POST | `/api/auth/refresh` | No | Refresh JWT |
| POST | `/api/auth/logout` | Yes | Logout, revoke token |
| GET | `/api/auth/me` | Yes | Current user profile and permissions |
| GET | `/api/modules` | Yes | Discover active module manifests |
| GET | `/api/settings` | Yes | Get system settings |
| PUT | `/api/settings` | Yes | Update system settings |
| GET | `/api/lang?locale={locale}` | Yes | Get translation strings |

## Project Structure

```
app/
├── Config/           # App configuration (routes, auth, CORS, database)
├── Controllers/      # Health check and API controllers
├── Database/         # Migrations
├── Modules/          # Feature modules (e.g. contacts)
│   └── contacts/
│       ├── Controllers/
│       ├── Models/
│       ├── Entities/
│       ├── Database/
│       └── module.json
└── Views/
```

## License

[MIT](LICENSE)

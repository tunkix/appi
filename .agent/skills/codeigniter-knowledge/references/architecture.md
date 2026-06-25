# CodeIgniter 4 API Architecture

CI4 API-first structure, modules, directory layout, and namespace organization. **appi never renders HTML.** All responses are JSON. The UI layer is a React SPA hosted separately.

## Directory Layout

```
project-root/
├── app/                    # Application code
│   ├── Config/             # Configuration files (Services, Routes, App, Database, etc.)
│   ├── Controllers/        # HTTP Controllers
│   │   └── Api/            # API Controllers (extending ApiController base class)
│   │       ├── ApiController.php      # Base API controller setting format to JSON
│   │       ├── AuthController.php     # Core JWT authentication controller
│   │       ├── ModuleController.php   # Module discovery controller
│   │       ├── UserController.php     # User administration controller
│   │       ├── SettingsController.php # Core and module settings controller
│   │       └── LangController.php     # Localized string delivery controller
│   ├── Database/           # Core migrations and Seeds
│   │   ├── Migrations/
│   │   └── Seeds/
│   ├── Entities/           # CI4 Entity classes (data hydration + JSON serialization)
│   ├── Filters/            # HTTP Filters (CORS, JWT auth, rate limiting)
│   ├── Helpers/            # Global helper functions
│   ├── Language/           # Localization files (strings returned in API responses)
│   ├── Libraries/          # Custom libraries
│   ├── Models/             # CI4 Model classes (database interaction)
│   ├── Modules/            # Feature modules (each owns API routes + module.json)
│   │   └── <Name>/         # Module directory
│   │       ├── Config/Routes.php
│   │       ├── Controllers/
│   │       ├── Models/
│   │       ├── Entities/
│   │       ├── Services/
│   │       ├── Database/Migrations/
│   │       ├── Language/
│   │       ├── api_dev.md
│   │       └── module.json
│   └── Services/           # Core application services
├── public/                 # Document root (index.php only — no frontend assets here)
├── system/                 # CI4 framework core (DO NOT modify)
├── writable/               # Writable directories (logs, cache, uploads, sessions)
│   ├── cache/
│   ├── logs/
│   ├── session/
│   └── uploads/
├── tests/                  # Test files
├── .env                    # Environment configuration
└── spark                   # CLI tool
```

> **No `Views/` anywhere.** React SPA is the sole UI. Error rendering is handled via custom JSON responses in `app/Config/Exceptions.php`.

## Module Pattern

CI4 supports modular architecture via PSR-4 autoloading. Each module is a self-contained feature with its own API routes, controllers, models, services, migrations, and a `module.json` manifest consumed by the React SPA.

```
app/Modules/Contacts/
├── Config/
│   └── Routes.php          # Registers api/contacts/* routes
├── Controllers/
│   └── ContactController.php   # Extends ApiController (JSON only)
├── Entities/
│   └── ContactEntity.php       # CI4 Entity with $casts
├── Models/
│   └── ContactModel.php        # CI4 Model
├── Services/
│   └── ContactService.php      # Business logic
├── Database/
│   └── Migrations/
├── Language/                   # Translation files
├── api_dev.md              # Module API Documentation
└── module.json             # React SPA manifest
```

### Module Registration (Runtime Autoloading & Discovery)

Modules are registered dynamically at boot time. Rather than manually appending every new module to the `$psr4` array in `app/Config/Autoload.php`, the autoloader constructor is configured to dynamically scan the `app/Modules/` directory and register namespaces automatically:

```php
<?php

declare(strict_types=1);

namespace Config;

use CodeIgniter\Config\AutoloadConfig;

class Autoload extends AutoloadConfig
{
    public array $psr4 = [
        APP_NAMESPACE => APPPATH, // Maps 'App' -> 'app/'
    ];

    public function __construct()
    {
        parent::__construct();

        $modulesPath = APPPATH . 'Modules/';
        if (is_dir($modulesPath)) {
            $dirs = array_filter(glob($modulesPath . '*'), 'is_dir');
            foreach ($dirs as $dir) {
                $moduleName = basename($dir);
                $this->psr4['App\Modules\\' . $moduleName] = $dir;
            }
        }
    }
}
```

### Module Routes

All module routes live under the `api/<slug>/` prefix and require JWT authentication.

```php
<?php

declare(strict_types=1);

// app/Modules/Contacts/Config/Routes.php
use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->group('api/contacts', [
    'namespace' => 'App\Modules\Contacts\Controllers',
    'filter'    => 'jwtAuth', // Shield JWT filter — required on all module routes
], static function ($routes): void {
    $routes->get('/',          'ContactController::index');
    $routes->get('(:num)',     'ContactController::show/$1');
    $routes->post('/',         'ContactController::create');
    $routes->put('(:num)',     'ContactController::update/$1');
    $routes->delete('(:num)',  'ContactController::delete/$1');
});
```

## Module Manifest (`module.json`)

Each module ships a `module.json` file that the React SPA fetches at boot via `GET /api/modules`. This manifest drives:

- **`client_routes`**: React Router route definitions (path, component, layout, required roles)
- **`form_schema`**: Field descriptors for auto-generated create/edit forms
- **`permissions`**: Shield permission keys registered in `AuthGroups`
- **`api_schema`**: Filter params and response fields for dynamic list views

See `module-schema.md` for the full field reference.

## Base API Controller and Core Controllers

All API controllers in appi must extend `App\Controllers\Api\ApiController` which extends `CodeIgniter\RESTful\ResourceController` and sets `protected $format = 'json'`.

### Core Controllers Description
1. **`ApiController`**: The base abstract class ensuring all extending controllers inherit JSON formatting, uniform REST responses, and consistent exception wrapping.
2. **`AuthController`**: Manages user authentication lifecycle via Shield. Exposes JWT acquisition (`/api/auth/login`), refreshing (`/api/auth/refresh`), logout (`/api/auth/logout`), and fetching current session profile (`/api/auth/me`).
3. **`ModuleController`**: Exposes `/api/modules` which scans the modules directory, parses active `module.json` files, and serves them in a combined payload for SPA boot registration.
4. **`UserController`**: Exposes `/api/users` REST resource for administrative user CRUD operations (creating users, assigning groups, toggling active states).
5. **`SettingsController`**: Exposes `/api/settings` for fetching and updating global systems config (branding, locales, formats) and module settings.
6. **`LangController`**: Exposes `/api/lang` or `/api/i18n` which delivers localized strings based on the requested locale for SPA UI labels.

## Namespace Organization

### Standard CI4 Namespaces (appi)

| Namespace | Purpose | Location |
|-----------|---------|----------|
| `App\Controllers` | Core HTTP Controllers | `app/Controllers/` |
| `App\Models` | Core Database Models | `app/Models/` |
| `App\Entities` | Entity classes | `app/Entities/` |
| `App\Filters` | HTTP Filters | `app/Filters/` |
| `App\Config` | Configuration | `app/Config/` |
| `App\Libraries` | Custom libraries | `app/Libraries/` |
| `App\Services` | Application services | `app/Services/` |
| `App\Database\Migrations` | Core migrations | `app/Database/Migrations/` |
| `App\Database\Seeds` | Seeders | `app/Database/Seeds/` |
| `App\Modules\<Name>\Controllers` | Module Controllers | `app/Modules/<Name>/Controllers/` |
| `App\Modules\<Name>\Models` | Module Models | `app/Modules/<Name>/Models/` |
| `App\Modules\<Name>\Entities` | Module Entities | `app/Modules/<Name>/Entities/` |
| `App\Modules\<Name>\Services` | Module Services | `app/Modules/<Name>/Services/` |

## Config Management

### Environment-Based Configuration

```php
<?php
// .env
// CI_ENVIRONMENT = production
// database.default.hostname = localhost
// database.default.database = appi
// JWT_SECRET_KEY = <secret>
// ALLOWED_ORIGINS = https://admin.example.com,https://app.example.com
```

### Custom Configuration Class

```php
<?php

declare(strict_types=1);

namespace Config;

use CodeIgniter\Config\BaseConfig;

final class ApiSettings extends BaseConfig
{
    public string $version      = 'v1';
    public int    $pageSize     = 25;
    public int    $maxPageSize  = 100;
}
```

## CI4 API Lifecycle

```
1. public/index.php          → Bootstrap framework
2. Config/App.php             → Load application config
3. Config/Routes.php          → Match route to Controller
4. Filters (before)           → CORS → JWT auth → Rate limit
5. Controller::method()       → Validate input, delegate to Service
6. Service / Model calls      → Business logic and data access
7. JSON Response serialized   → ResourceController::respond() / fail*()
8. Filters (after)            → Post-processing (logging, headers)
9. Response sent to React SPA → 200/201/204/400/401/403/404/422/429
```

## Detection Patterns

```bash
# Find all Controllers
Glob: app/Controllers/**/*.php
Glob: app/Modules/*/Controllers/*.php

# Find illegal view() calls
Grep: "view(" --glob "app/**/*.php"

# Check for module routes
Glob: app/Modules/*/Config/Routes.php

# Find module manifests
Glob: app/Modules/*/module.json

# Find configuration classes
Grep: "extends BaseConfig" --glob "app/Config/*.php"

# Check namespace registration
Grep: "psr4" --glob "app/Config/Autoload.php"
```

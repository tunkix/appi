---
name: codeigniter-knowledge
description: CodeIgniter 4 framework knowledge base for API-first applications. Provides CI4 RESTful API architecture, modular API design, persistence, services, security (Shield JWT auth, Filters authorization, CORS), event system, infrastructure components (cache, HTTP client, email, throttler), React SPA contract, module.json schema, testing, and antipatterns for CodeIgniter PHP API projects.
---

# CodeIgniter Knowledge Base

Quick reference for CodeIgniter 4 framework patterns and PHP API implementation guidelines. CodeIgniter 4 is built for PHP 8.1+ with namespaces, autoloading, and a lightweight, high-performance architecture. **appi is a pure API backend** — it never renders HTML views. All UI is served by a React SPA (admin UI) hosted separately. The CI4 app exposes only JSON over HTTP.

## Core Principles

### API Request Lifecycle

```
Request → index.php → Bootstrap → Routing
  → Filters (before: CORS, JWT auth, rate limit) → Controller (ResourceController)
  → Service → Model → JSON Response
  → Filters (after) → React SPA Client
```

**Key principles:**
- **No views, ever.** CI4 `view()` helper is never called. All responses are JSON.
- Lightweight core with minimal overhead — no template engine, no server-side sessions for API routes.
- Modular architecture via namespaces (`app/Modules/`). Each module owns its API routes + `module.json` manifest.
- Services container for dependency injection and lookup.
- Filters acting as middleware for CORS, Shield JWT authentication, and authorization.
- Entities implementing CI4 Entity with `$casts` for seamless JSON serialization.
- React SPA consumes `module.json` manifests to drive routing, forms, and permissions.

## Quick Checklists

### Standard CI4 API Project (appi style)

- [ ] All controllers extend `ResourceController` with `protected $format = 'json'`
- [ ] No `view()` calls anywhere in the codebase
- [ ] All routes under `api/` prefix
- [ ] Shield JWT filter applied to all protected API routes
- [ ] CORS filter applied globally (React SPA is on a different origin)
- [ ] CSRF disabled for all routes (stateless API — not needed)
- [ ] Input validated at Controller level (returning structured 422 JSON on failure)
- [ ] Services registered in `Config\Services` for dependency management
- [ ] Business logic in Service classes, not Controllers
- [ ] Each module has a `module.json` manifest consumed by the React SPA
- [ ] Module permissions registered in `Config\AuthGroups` via Shield
- [ ] Migrations namespaced under each module

**Spark CLI commands for common tasks:**
```bash
php spark make:controller <Name>Controller --restful       # Generate API controller
php spark make:model <Name>Model                           # Generate model
php spark make:entity <Name>Entity                         # Generate entity
php spark make:filter <Name>Filter                         # Generate filter
php spark make:migration <CreateNameTable>                 # Generate migration
php spark make:seeder <Name>Seeder                         # Generate seeder
php spark shield:setup                                     # Initialize Shield (run once)
php spark migrate --all                                    # Run all migrations
```

### Module Checklist

- [ ] Module directory under `app/Modules/<Name>/` with standard structure:
  ```
  app/Modules/<Name>/
  ├── Config/Routes.php
  ├── Controllers/<Name>Controller.php
  ├── Models/<Name>Model.php
  ├── Entities/<Name>Entity.php
  ├── Services/<Name>Service.php
  ├── Database/Migrations/
  ├── Language/
  └── module.json
  ```
- [ ] `module.json` with: `slug`, `name`, `icon`, `route`, `version`, `api_prefix`, `client_routes`, `form_schema`, `permissions`, `status`
- [ ] `Config/Routes.php` registering routes under `api/<slug>/` (using JWT auth filter)
- [ ] Controllers extend `ApiController` (extends `ResourceController`) and return JSON only
- [ ] Permissions defined in `module.json` match Shield `AuthGroups` matrix — **both must be kept in sync** (`AuthGroups.php` is the runtime source of truth; `module.json` drives SPA UI gating)

**Spark CLI for module scaffolding:**
```bash
php spark make:model <Name>Model --namespace App\\Modules\\<Name>
php spark make:entity <Name>Entity --namespace App\\Modules\\<Name>
php spark make:migration <CreateNameTable> --namespace App\\Modules\\<Name>
```

## Core API Endpoints

appi must expose these standard core endpoints for SPA consumption:

| Endpoint | Method | Auth Required | Description |
|---|---|---|---|
| `/api/auth/login` | POST | No | Authenticate user credentials, returns JWT |
| `/api/auth/refresh` | POST | No | Refresh expired JWT token |
| `/api/auth/logout` | POST | Yes | Revoke active JWT token |
| `/api/auth/me` | GET | Yes | Retrieve authenticated user profile and permissions |
| `/api/modules` | GET | Yes | Discover all active module manifests |
| `/api/users` | GET/POST/PUT/DELETE | Yes (Admin) | Standard user administration |
| `/api/settings` | GET/PUT | Yes | Expose and update global/module-specific settings |
| `/api/lang?locale=xx` | GET | Yes | Retrieve localized translation strings |

## Common Violations Quick Reference

| Violation | Where to Look | Severity |
|-----------|---------------|----------|
| Calling `view()` in a controller | `app/Controllers/**/*.php` | **Critical** |
| Missing `$format = 'json'` on controller | `app/Controllers/**/*.php` | Critical |
| Business logic in Controller | `app/Controllers/Api/*.php` | Critical |
| Direct DB queries in Controller | `$this->db->` in Controllers | Critical |
| Model contains business rules | Complex `if/switch` in Model methods | Warning |
| Missing input validation | Controllers without JSON validation rules | Warning |
| God Controller | Controllers > 300 lines | Warning |
| CSRF enabled for API routes | `app/Config/Filters.php` | Critical |
| `redirect()->to()` in API Filter | Any Filter returning redirect | Critical |
| Hardcoded config values | Magic strings instead of config classes | Info |

## PHP 8.4 CodeIgniter API Patterns

### Controller (Thin REST Controller, Delegates to Service)

```php
<?php
declare(strict_types=1);
namespace App\Controllers\Api;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\HTTP\ResponseInterface;

final class ContactController extends ResourceController
{
    protected $format = 'json'; // Always set — returns JSON

    public function __construct(
        private readonly ContactService $contactService,
    ) {}

    public function index(): ResponseInterface
    {
        return $this->respond([
            'status' => 'success',
            'data'   => $this->contactService->findAll(),
        ]);
    }

    public function show(?string $id = null): ResponseInterface
    {
        $contact = $this->contactService->findById((int) $id);

        if ($contact === null) {
            return $this->failNotFound('Contact not found.');
        }

        return $this->respond(['status' => 'success', 'data' => $contact]);
    }
}
```

### Service (Application Layer)

```php
<?php
declare(strict_types=1);
namespace App\Services;

final readonly class ContactService
{
    public function __construct(
        private ContactModel $model,
    ) {}

    public function findAll(): array
    {
        return $this->model->findAll();
    }

    public function findById(int $id): ?object
    {
        return $this->model->find($id);
    }
}
```

### Model as Data Layer

```php
<?php
declare(strict_types=1);
namespace App\Models;

use CodeIgniter\Model;

final class ContactModel extends Model
{
    protected $table         = 'contacts_contacts';
    protected $primaryKey    = 'id';
    protected $returnType    = ContactEntity::class;
    protected $allowedFields = ['first_name', 'last_name', 'company', 'job_title', 'notes'];
    protected $useTimestamps = true;
    protected $useSoftDeletes = true;
}
```

## References

For detailed information, load these reference files:

- `references/architecture.md` -- CI4 API structure, modules, directory layout
- `references/routing-http.md` -- RESTful controllers, API filters, CORS, validation
- `references/persistence.md` -- CI4 Model, Entity, migrations, seeders
- `references/dependency-injection.md` -- Services class, custom registration, DI patterns
- `references/security.md` -- Shield JWT authentication/authorization, CORS Filters
- `references/event-system.md` -- CI4 Events, publish/subscribe, lifecycle events
- `references/infrastructure-components.md` -- Cache, CURLRequest HTTP client, Email, Throttler
- `references/testing.md` -- CIUnitTestCase, DatabaseTestTrait, API feature testing, mocking
- `references/antipatterns.md` -- Common violations with detection patterns and fixes
- `references/react-ui.md` -- React SPA contract: auth, module manifest, routing, error envelope
- `references/module-schema.md` -- module.json schema reference for building modules

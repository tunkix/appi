# Routing and HTTP in CodeIgniter 4

Controllers, Filters, RESTful routing, input validation, and Request/Response objects for a pure JSON API. **No view rendering — all responses are JSON.**

## Controllers

### Base API Controller

All controllers in appi extend `ResourceController` and set `$format = 'json'`. Never use the plain `BaseController` for API endpoints.

```php
<?php

declare(strict_types=1);

namespace App\Controllers\Api;

use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\RESTful\ResourceController;

/**
 * All API controllers:
 * - Extend ResourceController (not BaseController)
 * - Set $format = 'json'
 * - Delegate business logic to a Service
 * - Never call view()
 */
abstract class ApiController extends ResourceController
{
    protected $format = 'json';
}
```

### Resource Controller (RESTful)

```php
<?php

declare(strict_types=1);

namespace App\Controllers\Api;

use App\Services\ContactService;
use CodeIgniter\HTTP\ResponseInterface;

final class ContactController extends ApiController
{
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
        if ($id === null) {
            return $this->failValidationError('ID is required.');
        }

        $contact = $this->contactService->findById((int) $id);

        if ($contact === null) {
            return $this->failNotFound('Contact not found.');
        }

        return $this->respond(['status' => 'success', 'data' => $contact]);
    }

    public function create(): ResponseInterface
    {
        if (!$this->validate($this->createRules())) {
            return $this->failValidationErrors($this->validator->getErrors());
        }

        $id = $this->contactService->create($this->validator->getValidated());

        return $this->respondCreated(['status' => 'created', 'id' => $id]);
    }

    public function update($id = null): ResponseInterface
    {
        if (!$this->validate($this->updateRules())) {
            return $this->failValidationErrors($this->validator->getErrors());
        }

        $this->contactService->update((int) $id, $this->validator->getValidated());

        return $this->respond(['status' => 'updated']);
    }

    public function delete($id = null): ResponseInterface
    {
        $this->contactService->delete((int) $id);

        return $this->respondDeleted(['status' => 'deleted']);
    }

    /** @return array<string, string> */
    private function createRules(): array
    {
        return [
            'first_name' => 'required|min_length[2]|max_length[100]',
            'last_name'  => 'required|min_length[2]|max_length[100]',
            'company'    => 'permit_empty|max_length[255]',
            'job_title'  => 'permit_empty|max_length[255]',
        ];
    }

    /** @return array<string, string> */
    private function updateRules(): array
    {
        return [
            'first_name' => 'permit_empty|min_length[2]|max_length[100]',
            'last_name'  => 'permit_empty|min_length[2]|max_length[100]',
            'company'    => 'permit_empty|max_length[255]',
        ];
    }
}
```

## RESTful Routing

### Route Configuration

```php
<?php

declare(strict_types=1);

// app/Config/Routes.php
use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */

// Root health-check (no auth)
$routes->get('/', 'Home::index');

// API v1 — all routes require JWT auth
$routes->group('api', ['filter' => 'cors'], static function ($routes): void {

    // Auth routes (no JWT required — these issue/refresh tokens)
    $routes->post('auth/login',   'Api\AuthController::login');
    $routes->post('auth/refresh', 'Api\AuthController::refresh');

    // Protected API routes
    $routes->group('', ['filter' => 'jwtAuth'], static function ($routes): void {

        // Session-related auth routes
        $routes->post('auth/logout', 'Api\AuthController::logout');
        $routes->get('auth/me',      'Api\AuthController::me');

        // Core resources
        $routes->resource('contacts', ['controller' => 'Api\ContactController']);
        $routes->resource('users',    ['controller' => 'Api\UserController']);

        // Module manifest discovery
        $routes->get('modules', 'Api\ModuleController::index');

        // Settings
        $routes->get('settings',  'Api\SettingsController::index');
        $routes->put('settings',  'Api\SettingsController::update');

        // Localization
        $routes->get('lang', 'Api\LangController::index');
    });
});

```

### Route Placeholders

| Placeholder | Matches | Example |
|-------------|---------|---------|
| `(:num)` | Numeric only | `/contacts/123` |
| `(:alpha)` | Alphabetic only | `/category/electronics` |
| `(:alphanum)` | Alphanumeric | `/slug/item42` |
| `(:segment)` | Any except `/` | `/product/blue-widget` |
| `(:any)` | Any characters | `/path/to/anything` |

### `$routes->resource()` Auto-generated Routes

```
GET    /contacts         → ContactController::index()    (list)
GET    /contacts/(:num)  → ContactController::show($1)   (detail)
POST   /contacts         → ContactController::create()   (create)
PUT    /contacts/(:num)  → ContactController::update($1) (update)
DELETE /contacts/(:num)  → ContactController::delete($1) (delete)
```

## Filters (Middleware Equivalent)

### CORS Filter (required — React SPA is cross-origin)

```php
<?php

declare(strict_types=1);

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

final class CorsFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null): RequestInterface|ResponseInterface|void
    {
        // Handle preflight
        if ($request->getMethod() === 'options') {
            return service('response')
                ->setStatusCode(204)
                ->setHeader('Access-Control-Allow-Origin',  env('ALLOWED_ORIGINS', '*'))
                ->setHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, PATCH, DELETE, OPTIONS')
                ->setHeader('Access-Control-Allow-Headers', 'Content-Type, Authorization, X-Requested-With')
                ->setHeader('Access-Control-Max-Age',       '86400');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null): ResponseInterface|void
    {
        return $response
            ->setHeader('Access-Control-Allow-Origin',      env('ALLOWED_ORIGINS', '*'))
            ->setHeader('Access-Control-Allow-Credentials', 'true');
    }
}
```

### JWT Auth Filter

```php
<?php

declare(strict_types=1);

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

final class JwtAuthFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null): RequestInterface|ResponseInterface|void
    {
        $token = $request->getHeaderLine('Authorization');

        if ($token === '' || !str_starts_with($token, 'Bearer ')) {
            return service('response')
                ->setStatusCode(401)
                ->setJSON(['status' => 'error', 'message' => 'Unauthenticated.']);
        }

        // Validate token via Shield JWT
        if (!auth('jwt')->validate(substr($token, 7))) {
            return service('response')
                ->setStatusCode(401)
                ->setJSON(['status' => 'error', 'message' => 'Invalid or expired token.']);
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null): ResponseInterface|void {}
}
```

### Filter Registration

```php
<?php

declare(strict_types=1);

// app/Config/Filters.php
namespace Config;

use App\Filters\CorsFilter;
use App\Filters\JwtAuthFilter;
use App\Filters\RateLimitFilter;
use CodeIgniter\Config\Filters as BaseFilters;
use CodeIgniter\Shield\Filters\GroupFilter;
use CodeIgniter\Shield\Filters\PermissionFilter;

final class Filters extends BaseFilters
{
    public array $aliases = [
        'cors'       => CorsFilter::class,
        'jwtAuth'    => JwtAuthFilter::class,      // or Shield's built-in JWT filter
        'group'      => GroupFilter::class,
        'permission' => PermissionFilter::class,
        'ratelimit'  => RateLimitFilter::class,
    ];

    public array $globals = [
        'before' => ['cors'],   // CORS runs on every request — no CSRF for APIs
        'after'  => [],
    ];
}
```

## Input Validation

### JSON Body Validation

```php
<?php

declare(strict_types=1);

public function create(): ResponseInterface
{
    $rules = [
        'email'    => 'required|valid_email|is_unique[users.email]',
        'password' => 'required|min_length[8]|max_length[255]',
        'name'     => 'required|min_length[2]|max_length[100]',
    ];

    $messages = [
        'email' => ['is_unique' => 'This email is already registered.'],
    ];

    if (!$this->validate($rules, $messages)) {
        return $this->response
            ->setStatusCode(422)
            ->setJSON([
                'status' => 'error',
                'errors' => $this->validator->getErrors(),
            ]);
    }

    $validData = $this->validator->getValidated();
    $id = service('userService')->create($validData);

    return $this->response
        ->setStatusCode(201)
        ->setJSON(['status' => 'created', 'id' => $id]);
}
```

### Validation Config Class

```php
<?php

declare(strict_types=1);

// app/Config/Validation.php
namespace Config;

use CodeIgniter\Config\BaseConfig;

final class Validation extends BaseConfig
{
    /** @var array<string, array<string, string>> */
    public array $createContact = [
        'first_name' => 'required|min_length[2]|max_length[100]',
        'last_name'  => 'required|min_length[2]|max_length[100]',
        'company'    => 'permit_empty|max_length[255]',
    ];
}
```

## Request / Response Objects

### Working with Request

```php
<?php

declare(strict_types=1);

// GET parameters
$page    = $this->request->getGet('page');
$perPage = $this->request->getGet('per_page', FILTER_SANITIZE_NUMBER_INT);

// JSON body (API standard)
$data = $this->request->getJSON(assoc: true);

// Headers
$contentType = $this->request->getHeaderLine('Content-Type');
$bearerToken = $this->request->getHeaderLine('Authorization'); // "Bearer <token>"

// File uploads
$file = $this->request->getFile('avatar');
if ($file !== null && $file->isValid() && !$file->hasMoved()) {
    $file->move(WRITEPATH . 'uploads');
}

// Client IP (for rate limiting)
$ip = $this->request->getIPAddress();
```

### Standard JSON Response Envelope

All API responses use a consistent envelope:

```php
<?php

declare(strict_types=1);

// Success — list
return $this->respond([
    'status' => 'success',
    'data'   => $items,
    'meta'   => ['total' => 100, 'page' => 1, 'per_page' => 25],
]);

// Success — single resource
return $this->respond(['status' => 'success', 'data' => $item]);

// Created
return $this->respondCreated(['status' => 'created', 'id' => $newId]);

// No content (delete)
return $this->respondDeleted(['status' => 'deleted']);

// Validation error
return $this->response
    ->setStatusCode(422)
    ->setJSON(['status' => 'error', 'errors' => $this->validator->getErrors()]);

// Not found
return $this->failNotFound('Resource not found.');

// Unauthorized (filter, not controller)
return service('response')
    ->setStatusCode(401)
    ->setJSON(['status' => 'error', 'message' => 'Unauthenticated.']);

// Forbidden
return service('response')
    ->setStatusCode(403)
    ->setJSON(['status' => 'error', 'message' => 'Forbidden.']);
```

## Detection Patterns

```bash
# Find all controllers
Grep: "extends ResourceController|extends ApiController" --glob "app/Controllers/**/*.php"
Grep: "extends ResourceController|extends ApiController" --glob "app/Modules/*/Controllers/**/*.php"

# Find illegal view() calls
Grep: "view(" --glob "app/**/*.php"

# Find route definitions
Grep: "\$routes->(get|post|put|delete|resource|group)" --glob "app/Config/Routes.php"
Grep: "\$routes->(get|post|put|delete|resource|group)" --glob "app/Modules/*/Config/Routes.php"

# Find filter definitions
Grep: "implements FilterInterface" --glob "app/Filters/**/*.php"

# Find validation
Grep: "\$this->validate\(" --glob "app/Controllers/**/*.php"

# Controllers missing $format = 'json'
Grep: "class.*extends.*Controller" --glob "app/Controllers/**/*.php"
# Cross-check absence of: protected \$format = 'json'

# Find route groups with filters
Grep: "'filter'" --glob "app/Config/Routes.php"
Grep: "'filter'" --glob "app/Modules/*/Config/Routes.php"
```

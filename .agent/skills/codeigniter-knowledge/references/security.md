# Security in CodeIgniter 4

Shield JWT authentication, Filters authorization, and rate limiting. **appi is a stateless JSON API** — there are no HTML forms, no CSRF tokens, no server-side sessions for API routes.

## Authentication Architecture

```
React SPA                          CI4 API (appi)
─────────────────────────────────────────────────
POST /api/auth/login   ──────────► AuthController::login()
  { email, password }                ↓ Shield validates credentials
                       ◄──────────  { token: "<JWT>", expires_in: 3600 }

Subsequent requests:
GET /api/contacts
Authorization: Bearer <JWT>  ────► jwtAuth Filter → Shield JWT decode → Controller
                             ◄────  { status: "success", data: [...] }
```

## Shield JWT Setup

To configure CodeIgniter Shield for JWT stateless auth, follow these setup steps:

1. **Install CodeIgniter Shield package via Composer**:
   ```bash
   composer require codeigniter4/shield
   ```

2. **Run the Shield setup command**:
   ```bash
   php spark shield:setup
   ```

3. **Run database migrations to create Shield schema tables**:
   ```bash
   php spark migrate --all
   ```

4. **Update `app/Config/Auth.php` to set the default authenticator**:
   ```php
   <?php
   declare(strict_types=1);

   namespace Config;

   use CodeIgniter\Shield\Config\Auth as ShieldAuth;

   class Auth extends ShieldAuth
   {
       // Force JWT as the default authenticator for stateless API requests
       public string $defaultAuthenticator = 'jwt';
   }
   ```

### Auth Controller (Login)

> **Shield v1.3.0 note:** The JWT authenticator's `attempt()` only validates JWT tokens, not email/password. Use the **Session authenticator** for credential validation, then issue a JWT via `JWTManager::generateToken()`.

```php
<?php
declare(strict_types=1);
namespace App\Controllers\Api;

use App\Controllers\Api\ApiController;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Shield\Authentication\JWTManager;

final class AuthController extends ApiController
{
    protected $format = 'json';

    public function login(): ResponseInterface
    {
        if (!$this->validate([
            'email'    => 'required|valid_email',
            'password' => 'required|min_length[8]',
        ])) {
            return $this->response->setStatusCode(422)->setJSON([
                'status' => 'error', 'errors' => $this->validator->getErrors(),
            ]);
        }

        $result = auth('session')->attempt([
            'email'    => $this->request->getJSON()->email,
            'password' => $this->request->getJSON()->password,
        ]);

        if (!$result->isOK()) {
            return $this->response->setStatusCode(401)->setJSON([
                'status' => 'error', 'message' => 'Invalid credentials.',
            ]);
        }

        /** @var JWTManager $jwtManager */
        $jwtManager = service('jwtmanager');

        return $this->respond([
            'status'     => 'success',
            'token'      => $jwtManager->generateToken(auth('session')->getUser()),
            'expires_in' => 3600,
            'user'       => [
                'id'    => auth('session')->getUser()->id,
                'email' => auth('session')->getUser()->email,
            ],
        ]);
    }
}
```

#### Why Two Authenticators?

| Authenticator | Role | Used For |
|---|---|---|
| `session` | Validates email + password credentials | `POST /api/auth/login` |
| `jwt` | Validates Bearer tokens in request headers | All other protected API routes (`jwtAuth` filter) |

The `session` authenticator is only used at login time. After credential validation, a JWT is generated and returned to the client. Subsequent requests carry the JWT in the `Authorization` header, where the `jwtAuth` filter validates it using the `jwt` authenticator's `check()` method.

## Disabling Shield's Built-in Auth Views and Session Routes

Shield ships with session-based auth views (login page HTML, registration forms, password reset pages) and session-based auth routes. Since appi is a **stateless JSON API using JWT**, these must be disabled.

### Required Configuration

```php
<?php

declare(strict_types=1);

// app/Config/Auth.php
namespace Config;

use CodeIgniter\Shield\Config\Auth as ShieldAuth;

class Auth extends ShieldAuth
{
    // Force JWT as the only authenticator
    public string $defaultAuthenticator = 'jwt';

    // Disable session authenticator entirely — API only
    public array $authenticators = [
        'jwt' => [
            'class' => 'CodeIgniter\Shield\Authentication\JWT',
        ],
    ];

    // Disable all auth views — API returns JSON, not HTML
    public array $views = [
        'login'            => '',
        'register'         => '',
        'magic-link-login' => '',
    ];

    // Disable registration
    public bool $allowRegistration = false;
    public bool $allowMagicLinkLogins = false;

    // Increase JWT lifetime (optional, default 3600)
    public int $activeLength = 3600;
}
```

### Preventing Shield's Route Registration

By default, Shield registers session-based auth routes. Prevent this by not loading Shield's route file:

```php
<?php

declare(strict_types=1);

// app/Config/Routes.php — do NOT call Shield's route registration
// Bad: service('auth')->routes($routes);
// Instead, register only the API auth routes manually:

$routes->group('api', ['filter' => 'cors'], static function ($routes): void {
    // Public auth routes
    $routes->post('auth/login',   'Api\AuthController::login');
    $routes->post('auth/refresh', 'Api\AuthController::refresh');

    // Protected routes
    $routes->group('', ['filter' => 'jwtAuth'], static function ($routes): void {
        $routes->post('auth/logout', 'Api\AuthController::logout');
        $routes->get('auth/me',      'Api\AuthController::me');
    });
});
```

> **Rule:** Never call `service('auth')->routes($routes)` in `app/Config/Routes.php`. Shield's session-based auth routes (login page, registration, forgot password) must NOT be registered in an API-only app.

---

## Authorization with Shield Groups and Permissions

```php
<?php
declare(strict_types=1);

// app/Config/AuthGroups.php
namespace Config;
use CodeIgniter\Shield\Config\AuthGroups as ShieldAuthGroups;

final class AuthGroups extends ShieldAuthGroups
{
    public array $groups = [
        'superadmin' => ['title' => 'Super Admin'],
        'admin'      => ['title' => 'Admin'],
        'developer'  => ['title' => 'Developer'],
        'user'       => ['title' => 'Standard User'],
        'beta'       => ['title' => 'Beta User'],
    ];

    public array $permissions = [
        'admin.access'        => 'Admin panel access',
        'admin.settings'      => 'Can access main site settings',
        'users.manage-admins' => 'Can manage other admins',
        'users.create'        => 'Can create users',
        'users.edit'          => 'Can edit users',
        'users.delete'        => 'Can delete users',
        'beta.access'         => 'Can access beta features',
        // Contacts module (mirrors module.json permissions)
        'contacts.view'       => 'Can view contacts',
        'contacts.create'     => 'Can create contacts',
        'contacts.edit'       => 'Can edit contacts',
        'contacts.delete'     => 'Can delete contacts',
        'contacts.export'     => 'Can export contacts',
        'contacts.manage'     => 'Full contacts access',
    ];

    public array $matrix = [
        'superadmin' => ['admin.*', 'users.*', 'beta.*', 'contacts.*'],
        'admin'      => ['admin.access', 'users.create', 'users.edit', 'users.delete', 'beta.access', 'contacts.*'],
        'developer'  => ['admin.access', 'admin.settings', 'users.create', 'users.edit', 'beta.access'],
        'user'       => [],
        'beta'       => ['beta.access'],
    ];
}
```

### Permission Source of Truth

appi manages permissions in **two places** with distinct roles:

| Location | Purpose | Authority |
|----------|---------|-----------|
| `app/Config/AuthGroups.php` | **Runtime authorization** — Shield checks these on every API request | **Source of truth** |
| `module.json` (`permissions` section) | **SPA UI gating** — client-side menu visibility, button rendering | Must mirror `AuthGroups` |

**Rules:**
1. `AuthGroups.php` is the **runtime source of truth**. If a permission key exists in `module.json` but not in `AuthGroups`, Shield will silently allow access.
2. `module.json` permissions are for **SPA discovery only** — they drive UI elements (show/hide buttons, menu items).
3. Every key in `module.json → permissions` must have a matching key in `AuthGroups::$permissions`.
4. When adding a new module, update **both** files. The module's `module.json` defines the UI-facing permissions; `AuthGroups.php` enforces them at the API level.

### Route-Level Authorization

```php
<?php
declare(strict_types=1);

// app/Config/Routes.php
$routes->group('api', ['filter' => 'cors'], static function ($routes): void {
    // Auth (no JWT required)
    $routes->post('auth/login', 'Api\AuthController::login');

    // Protected routes
    $routes->group('', ['filter' => 'jwtAuth'], static function ($routes): void {
        // Admin-only
        $routes->group('admin', ['filter' => 'group:admin,superadmin'], static function ($routes): void {
            $routes->resource('users', ['controller' => 'Api\UserController']);
        });
        // Permission-guarded
        $routes->group('contacts', ['filter' => 'permission:contacts.view'], static function ($routes): void {
            $routes->get('/',      'Api\ContactController::index');
            $routes->get('(:num)', 'Api\ContactController::show/$1');
        });
    });
});
```

## Filters for Authorization

**Critical Rule: API filters NEVER redirect. Always return a JSON error response.**

```php
<?php
declare(strict_types=1);
namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

final readonly class JwtAuthFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null): RequestInterface|ResponseInterface|void
    {
        $token = $request->getHeaderLine('Authorization');

        if ($token === '' || !str_starts_with($token, 'Bearer ')) {
            // NEVER: redirect()->to('/login')
            // ALWAYS: return JSON 401
            return service('response')
                ->setStatusCode(401)
                ->setJSON(['status' => 'error', 'message' => 'Unauthenticated.']);
        }

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
        'jwtAuth'    => JwtAuthFilter::class,
        'group'      => GroupFilter::class,
        'permission' => PermissionFilter::class,
        'ratelimit'  => RateLimitFilter::class,
    ];

    public array $globals = [
        // CORS runs globally. NO csrf — this is a stateless API.
        'before' => ['cors'],
        'after'  => [],
    ];
}
```

## CSRF — Disabled

**appi is a stateless API. CSRF protection must be disabled for all API routes.**

- **Filter Configuration**: The `csrf` filter alias (e.g. `CSRF::class`) can remain registered under `$aliases` in `app/Config/Filters.php` (since it is a default CodeIgniter 4 alias). However, it **MUST NOT** be enabled in the `$globals['before']` filter array or assigned to any route groups under `/api/*`.
- **Reasoning**: The React SPA authenticates with a JWT Bearer token via HTTP headers, not session cookies. Since there are no cookie-based session stores, cookie-based CSRF attacks are not possible.
- **No HTML Helpers**: Functions like `csrf_field()` or `csrf_meta()` are completely banned, as the API renders no HTML views.

## Rate Limiting

```php
<?php
declare(strict_types=1);
namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

final readonly class RateLimitFilter implements FilterInterface
{
    private const int MAX_REQUESTS   = 60;
    private const int WINDOW_SECONDS = 60;

    public function before(RequestInterface $request, $arguments = null): RequestInterface|ResponseInterface|void
    {
        $cache = service('cache');
        $key   = 'rate_limit:' . $request->getIPAddress();
        $hits  = (int) $cache->get($key);

        if ($hits >= self::MAX_REQUESTS) {
            return service('response')
                ->setStatusCode(429)
                ->setJSON(['status' => 'error', 'message' => 'Too many requests.']);
        }

        $cache->save($key, $hits + 1, self::WINDOW_SECONDS);
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null): ResponseInterface|void {}
}
```

---

## Development Workflow (Spark CLI)

Security-related spark commands for generating filters and managing Shield:

```bash
# Generate a custom filter (e.g., JWT auth, CORS, rate limiting)
php spark make:filter CorsFilter
php spark make:filter JwtAuthFilter
php spark make:filter RateLimitFilter

# Shield setup (run once after composer require codeigniter4/shield)
php spark shield:setup

# Run migrations (creates Shield schema tables: auth_logins, auth_token_logins, users, etc.)
php spark migrate --all
```

## Detection Patterns

```bash
# Find illegal redirects in Filters (must be 0)
Grep: "redirect()->" --glob "app/Filters/**/*.php"

# Find csrf_field() (must be 0)
Grep: "csrf_field\(\)" --glob "app/**/*.php"

# CSRF should NOT appear in globals
Grep: "'csrf'" --glob "app/Config/Filters.php"

# JWT filter usage
Grep: "jwtAuth" --glob "app/Config/Filters.php"
Grep: "jwtAuth" --glob "app/Config/Routes.php"

# Route-level authorization
Grep: "'filter'" --glob "app/Config/Routes.php"
Grep: "'filter'" --glob "app/Modules/*/Config/Routes.php"
```

## Summary Table

| Aspect | Component | Pattern |
|--------|-----------|---------|
| Authentication | Shield JWT | `jwtAuth` filter on all protected routes |
| Authorization | Shield Groups + Permissions | Route-level `group:` and `permission:` filters |
| CSRF | **Disabled** | Stateless Bearer token auth — never needed |
| CORS | CorsFilter (global) | Handles preflight + headers for React SPA |
| Rate Limiting | RateLimitFilter + Cache | Per-IP on `api/*` routes |
| Redirects | **Never** | Filters always return JSON 401/403 |

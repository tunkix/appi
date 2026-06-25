# Dependency Injection in CodeIgniter 4

Services class, custom registration, and DI patterns — standard CI4 dependency management.

## Services Class (Static Factory)

CI4 uses a `Config\Services` class as a centralized service locator and factory.

### How Services Work

```php
<?php

declare(strict_types=1);

// Getting a shared (singleton) instance
$logger = \Config\Services::logger();

// Getting a new instance each time
$logger = \Config\Services::logger(getShared: false);

// Using the service() helper
$session = service('session');
```

### Core Services

| Service | Method | Description |
|---------|--------|-------------|
| `request` | `Services::request()` | Current IncomingRequest |
| `response` | `Services::response()` | Response object |
| `logger` | `Services::logger()` | PSR-3 Logger |
| `session` | `Services::session()` | Session handler |
| `validation` | `Services::validation()` | Validation service |
| `cache` | `Services::cache()` | Cache handler |
| `email` | `Services::email()` | Email service |
| `router` | `Services::router()` | Router instance |
| `security` | `Services::security()` | Security handler |

## Custom Service Registration

### Defining Custom Services

```php
<?php

declare(strict_types=1);

// app/Config/Services.php
namespace Config;

use App\Models\OrderModel;
use App\Services\OrderService;
use CodeIgniter\Config\BaseService;

final class Services extends BaseService
{
    public static function orderService(bool $getShared = true): OrderService
    {
        if ($getShared) {
            return static::getSharedInstance('orderService');
        }

        return new OrderService(
            model: new OrderModel(),
        );
    }
}
```

### Usage in Controllers

```php
<?php

declare(strict_types=1);

namespace App\Controllers\Api;

use CodeIgniter\HTTP\ResponseInterface;

final class OrderController extends ApiController
{
    public function index(): ResponseInterface
    {
        $orders = service('orderService')->findAll();

        return $this->respond([
            'status' => 'success',
            'data'   => $orders,
        ]);
    }

    public function show(?string $id = null): ResponseInterface
    {
        $order = service('orderService')->findById((int) $id);

        if ($order === null) {
            return $this->failNotFound('Order not found.');
        }

        return $this->respond(['status' => 'success', 'data' => $order]);
    }
}
```

### Constructor Injection in Controllers

```php
<?php

declare(strict_types=1);

namespace App\Controllers\Api;

use App\Services\OrderService;
use CodeIgniter\HTTP\ResponseInterface;

final class OrderController extends ApiController
{
    public function __construct(
        private readonly OrderService $orderService,
    ) {}

    public function index(): ResponseInterface
    {
        return $this->respond([
            'status' => 'success',
            'data'   => $this->orderService->findAll(),
        ]);
    }
}
```

## Replacing Core Services

### Overriding Built-in Services

```php
<?php

declare(strict_types=1);

// app/Config/Services.php
namespace Config;

use App\Libraries\StructuredLogger;
use CodeIgniter\Config\BaseService;
use Psr\Log\LoggerInterface;

final class Services extends BaseService
{
    // Override the built-in logger service
    public static function logger(bool $getShared = true): LoggerInterface
    {
        if ($getShared) {
            return static::getSharedInstance('logger');
        }

        return new StructuredLogger(
            config('Logger'),
            WRITEPATH . 'logs/',
        );
    }
}
```

### Replacing Services in Tests

```php
<?php

declare(strict_types=1);

namespace Tests\Feature;

use App\Services\OrderService;
use CodeIgniter\Test\CIUnitTestCase;
use Config\Services;

final class OrderControllerTest extends CIUnitTestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        $mockService = $this->createMock(OrderService::class);
        $mockService->method('findAll')->willReturn([]);

        Services::injectMock('orderService', $mockService);
    }

    protected function tearDown(): void
    {
        parent::tearDown();
        Services::reset();
    }
}
```

## Service Discovery

CI4 can auto-discover services from third-party packages:

```php
<?php

declare(strict_types=1);

// Enable discovery in app/Config/Modules.php
public bool $discoverInComposer = true;
```

## Detection Patterns

```bash
# Find all custom services
Grep: "public static function" --glob "app/Config/Services.php"

# Find service() helper usage
Grep: "service\(" --glob "app/**/*.php"

# Find Services:: direct calls
Grep: "Services::" --glob "app/**/*.php"

# Find service overrides
Grep: "Services::injectMock\(" --glob "tests/**/*.php"

# Controllers creating dependencies directly (violation)
Grep: "new .*Model\(\)|new .*Service\(" --glob "app/Controllers/**/*.php"
```

## Common Pitfalls

| Pitfall | Problem | Solution |
|---------|---------|----------|
| `new Model()` in Controller | Tight coupling | Use `service()` or constructor injection |
| Missing `getShared` check | Multiple instances when singleton expected | Always include `getShared` pattern |
| Service with side effects | Hard to test | Keep service construction pure |

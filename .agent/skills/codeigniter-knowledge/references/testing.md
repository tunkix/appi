# Testing in CodeIgniter 4

PHPUnit with CIUnitTestCase, DatabaseTestTrait, API feature testing, mocking services. **appi is a pure JSON API** — all feature tests assert JSON responses and HTTP status codes. UI testing lives in the React SPA repo.

## PHPUnit with CIUnitTestCase

### Basic Test Setup

```php
<?php

declare(strict_types=1);

namespace Tests\Unit;

use CodeIgniter\Test\CIUnitTestCase;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Group;

#[Group('unit')]
final class ExampleTest extends CIUnitTestCase
{
    public function testTrueIsTrue(): void
    {
        $this->assertTrue(true);
    }
}
```

### Test Configuration

```xml
<!-- phpunit.xml.dist -->
<?xml version="1.0" encoding="UTF-8"?>
<phpunit
    bootstrap="system/Test/bootstrap.php"
    colors="true"
    failOnRisky="true"
    failOnWarning="true"
>
    <testsuites>
        <testsuite name="unit">
            <directory>tests/Unit</directory>
        </testsuite>
        <testsuite name="feature">
            <directory>tests/Feature</directory>
        </testsuite>
    </testsuites>
    <php>
        <env name="CI_ENVIRONMENT" value="testing"/>
        <env name="database.tests.DBDriver" value="SQLite3"/>
        <env name="database.tests.database" value=":memory:"/>
    </php>
</phpunit>
```

## DatabaseTestTrait for DB Testing

### Database Test Setup

```php
<?php

declare(strict_types=1);

namespace Tests\Feature;

use App\Models\OrderModel;
use CodeIgniter\Test\CIUnitTestCase;
use CodeIgniter\Test\DatabaseTestTrait;
use PHPUnit\Framework\Attributes\Group;

#[Group('feature')]
final class OrderModelTest extends CIUnitTestCase
{
    use DatabaseTestTrait;

    protected $migrateOnce = true;
    protected $seedOnce    = false;
    protected $seed        = 'Tests\Support\Seeds\OrderTestSeeder';
    protected $DBGroup     = 'tests';

    public function testFindActiveOrders(): void
    {
        $model = new OrderModel();
        $orders = $model->where('status', 'confirmed')->findAll();

        $this->assertNotEmpty($orders);
        $this->seeInDatabase('orders', ['status' => 'confirmed']);
    }

    public function testInsertOrder(): void
    {
        $model = new OrderModel();
        $model->insert([
            'id'          => 'test-order-new',
            'customer_id' => 'cust-001',
            'status'      => 'draft',
            'total'       => 7500,
        ]);

        $this->seeInDatabase('orders', [
            'id'     => 'test-order-new',
            'status' => 'draft',
        ]);
    }

    public function testSoftDelete(): void
    {
        $model = new OrderModel();
        $model->delete('test-order-001');

        $this->dontSeeInDatabase('orders', [
            'id'         => 'test-order-001',
            'deleted_at' => null,
        ]);
    }
}
```

### Database Assertions

| Assertion | Description |
|-----------|-------------|
| `seeInDatabase($table, $criteria)` | Assert row exists matching criteria |
| `dontSeeInDatabase($table, $criteria)` | Assert no row matches criteria |
| `seeNumRecords($num, $table, $criteria)` | Assert exact count of matching rows |
| `grabFromDatabase($table, $column, $criteria)` | Get a value from matching row |

## Feature Testing with HTTP

### API Feature Testing

```php
<?php

declare(strict_types=1);

namespace Tests\Feature;

use CodeIgniter\Test\CIUnitTestCase;
use CodeIgniter\Test\FeatureTestTrait;
use PHPUnit\Framework\Attributes\Group;

#[Group('feature')]
final class OrderApiTest extends CIUnitTestCase
{
    use FeatureTestTrait;

    public function testListOrders(): void
    {
        $result = $this->get('api/orders');

        $result->assertStatus(200);
        $result->assertJSONFragment(['status' => 'success']);
    }

    public function testCreateOrder(): void
    {
        $result = $this->withBody(json_encode([
            'customer_id' => 'cust-001',
            'items'       => [
                ['product_id' => 1, 'quantity' => 2],
            ],
        ]))->post('api/orders');

        $result->assertStatus(201);
        $result->assertJSONFragment(['status' => 'created']);
    }

    public function testCreateOrderValidationFails(): void
    {
        $result = $this->withBody(json_encode([
            'customer_id' => '',
        ]))->post('api/orders');

        $result->assertStatus(422);
        $result->assertJSONFragment(['errors' => true]);
    }

    public function testShowNotFound(): void
    {
        $result = $this->get('api/orders/nonexistent');

        $result->assertStatus(404);
    }

    public function testAuthRequired(): void
    {
        $result = $this->get('api/admin/dashboard');

        $result->assertStatus(401);
    }

    public function testWithAuthHeaders(): void
    {
        $result = $this->withHeaders([
            'Authorization' => 'Bearer valid-token-here',
        ])->get('api/orders');

        $result->assertStatus(200);
    }
}
```

### Response Assertions (API context)

| Assertion | Description | Use |
|-----------|-------------|-----|
| `assertStatus($code)` | Assert HTTP status code | All API tests |
| `assertOK()` | Assert 200 status | Success responses |
| `assertJSONFragment($data)` | Assert JSON contains fragment | Partial body check |
| `assertJSONExact($data)` | Assert JSON equals exactly | Strict body check |
| `assertHeader($name, $value)` | Assert response header | Content-Type, CORS |
| ~~`assertRedirect()`~~ | **Never** — APIs return JSON, not redirects | N/A |
| ~~`assertSee($text)`~~ | **Never** — no HTML views in appi | N/A |

## Mocking Services

### Using Services::injectMock

```php
<?php

declare(strict_types=1);

namespace Tests\Feature;

use App\Services\OrderService;
use CodeIgniter\Test\CIUnitTestCase;
use CodeIgniter\Test\FeatureTestTrait;
use Config\Services;
use PHPUnit\Framework\Attributes\Group;

#[Group('feature')]
final class ConfirmOrderTest extends CIUnitTestCase
{
    use FeatureTestTrait;

    private OrderService $mockService;

    protected function setUp(): void
    {
        parent::setUp();

        $this->mockService = $this->createMock(OrderService::class);
        Services::injectMock('orderService', $this->mockService);
    }

    protected function tearDown(): void
    {
        parent::tearDown();
        Services::reset();
    }

    public function testConfirmOrderDispatches(): void
    {
        $this->mockService
            ->expects($this->once())
            ->method('confirm')
            ->with('order-001');

        $result = $this->put('api/orders/order-001/confirm');

        $result->assertStatus(200);
    }
}
```

### Mocking the Email Service

```php
<?php

declare(strict_types=1);

$mockEmail = $this->createMock(\CodeIgniter\Email\Email::class);
$mockEmail->method('send')->willReturn(true);

Services::injectMock('email', $mockEmail);
```

## Running Tests

```bash
# Run all tests
php vendor/bin/phpunit

# Run specific suite
php vendor/bin/phpunit --testsuite unit

# Run with coverage
php vendor/bin/phpunit --coverage-html build/coverage

# Run specific test file
php vendor/bin/phpunit tests/Unit/OrderTest.php

# Run via CI4 spark
php spark test
php spark test --group unit
```

## Detection Patterns

```bash
# Find all test files
Glob: tests/**/*Test.php

# Find tests using DatabaseTestTrait
Grep: "use DatabaseTestTrait" --glob "tests/**/*.php"

# Find tests using FeatureTestTrait
Grep: "use FeatureTestTrait" --glob "tests/**/*.php"

# Find service mocking
Grep: "Services::injectMock" --glob "tests/**/*.php"

# Tests missing tearDown (potential mock leaks)
Grep: "injectMock" --glob "tests/**/*.php"
# Cross-check with Services::reset() in tearDown
```

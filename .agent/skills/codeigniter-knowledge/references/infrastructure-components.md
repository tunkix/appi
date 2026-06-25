# Infrastructure Components in CodeIgniter 4

Cache, CURLRequest HTTP Client, Email, and Throttler — standard CI4 usage without additional abstraction layers.

## Cache

### Configuration (app/Config/Cache.php)

CI4 supports multiple cache handlers: file, redis, memcached, predis, apcu, wincache, dummy.

```php
<?php

declare(strict_types=1);

namespace Config;

use CodeIgniter\Config\BaseConfig;

final class Cache extends BaseConfig
{
    public string $handler = 'file';
    public string $backupHandler = 'dummy';
    public string $prefix = '';
    public int $ttl = 60;

    public array $file = [
        'storePath' => WRITEPATH . 'cache/',
        'mode'      => 0640,
    ];
}
```

### Cache Methods

| Method | Purpose |
|--------|---------|
| `get($key)` | Retrieve cached item (null if miss) |
| `save($key, $data, $ttl)` | Store data with TTL |
| `delete($key)` | Remove specific item |
| `deleteMatching($pattern)` | Glob-style deletion (File/Redis only) |
| `increment($key, $offset)` | Atomic increment |
| `decrement($key, $offset)` | Atomic decrement |
| `remember($key, $ttl, $callback)` | Get or compute and cache |
| `clean()` | Clear entire cache |
| `getCacheInfo()` | Cache statistics |
| `getMetadata($key)` | Expiry and metadata |

### Usage in Services

```php
<?php

declare(strict_types=1);

namespace App\Services;

use CodeIgniter\Cache\CacheInterface;

final readonly class ContactService
{
    public function __construct(
        private CacheInterface $cache,
    ) {}

    public function findById(int $id): ?object
    {
        return $this->cache->remember("contact_{$id}", 300, function () use ($id) {
            return model('App\Models\ContactModel')->find($id);
        });
    }
}
```

## CURLRequest (HTTP Client)

### Basic Usage

```php
<?php

declare(strict_types=1);

$client = service('curlrequest');

// GET request
$response = $client->get('https://api.example.com/orders', [
    'headers' => ['Accept' => 'application/json'],
    'timeout' => 5,
]);

$data = json_decode($response->getBody(), true);
$status = $response->getStatusCode(); // 200

// POST with JSON
$response = $client->post('https://api.example.com/orders', [
    'json' => ['customer_id' => 123, 'total' => 5000],
    'headers' => ['Authorization' => 'Bearer token123'],
]);

// With base URI
$client = service('curlrequest', [
    'baseURI' => 'https://api.example.com/v1/',
    'timeout' => 10,
]);
$response = $client->get('orders/123');
```

### Configuration Options

| Option | Type | Purpose |
|--------|------|---------|
| `baseURI` | string | Base URL for relative paths |
| `timeout` | int | Request timeout (seconds) |
| `connect_timeout` | int | Connection timeout |
| `headers` | array | HTTP headers |
| `auth` | array | `[username, password, type]` |
| `json` | array | JSON body (auto Content-Type) |
| `form_params` | array | Form-encoded body |
| `query` | array | Query parameters |
| `verify` | bool/string | SSL verification |
| `http_errors` | bool | Throw on 4xx/5xx (default: true) |
| `allow_redirects` | bool/array | Follow redirects |

## Email

### Configuration (app/Config/Email.php)

```php
<?php

declare(strict_types=1);

namespace Config;

use CodeIgniter\Config\BaseConfig;

final class Email extends BaseConfig
{
    public string $protocol = 'smtp';
    public string $SMTPHost = 'smtp.example.com';
    public int $SMTPPort = 587;
    public string $SMTPUser = '';
    public string $SMTPPass = '';
    public string $SMTPCrypto = 'tls';
    public string $mailType = 'html';
    public string $charset = 'UTF-8';
    public bool $wordWrap = true;
}
```

### Usage in Services

```php
<?php

declare(strict_types=1);

namespace App\Services;

use CodeIgniter\Email\Email;

final readonly class NotificationService
{
    public function __construct(
        private Email $email,
    ) {}

    public function sendOrderConfirmation(int $orderId, string $customerEmail): void
    {
        $this->email->setFrom('noreply@app.com', 'appi');
        $this->email->setTo($customerEmail);
        $this->email->setSubject('Order Confirmed');
        $this->email->setMessage("Order #{$orderId} has been confirmed.");

        if (!$this->email->send()) {
            throw new \RuntimeException('Failed to send email');
        }
    }
}
```

## Throttler (Rate Limiting)

### Basic Usage

```php
<?php

declare(strict_types=1);

$throttler = service('throttler');

// Allow 60 requests per minute
if ($throttler->check('api_' . $request->getIPAddress(), 60, MINUTE) === false) {
    return service('response')
        ->setStatusCode(429)
        ->setJSON(['error' => 'Too many requests']);
}
```

### Rate Limiting Filter

```php
<?php

declare(strict_types=1);

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

final readonly class RateLimitFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null): RequestInterface|ResponseInterface|void
    {
        $throttler = service('throttler');
        $maxRequests = (int) ($arguments[0] ?? 60);
        $key = 'api_' . $request->getIPAddress();

        if ($throttler->check($key, $maxRequests, MINUTE) === false) {
            return service('response')
                ->setStatusCode(429)
                ->setHeader('Retry-After', (string) $throttler->getTokenTime())
                ->setJSON(['error' => 'Rate limit exceeded']);
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null): ResponseInterface|void {}
}
```

### Route Configuration

```php
<?php

declare(strict_types=1);

// app/Config/Filters.php
public array $aliases = [
    'throttle' => \App\Filters\RateLimitFilter::class,
];

// app/Config/Routes.php
$routes->group('api', ['filter' => 'throttle:100'], static function ($routes) {
    $routes->resource('orders');
});
```

## Detection Patterns

```bash
# Cache usage
Grep: "service\('cache'\)|CacheInterface" --glob "app/**/*.php"

# HTTP Client usage
Grep: "service\('curlrequest'\)" --glob "app/**/*.php"

# Email usage
Grep: "service\('email'\)" --glob "app/**/*.php"

# Throttler usage
Grep: "throttle\|Throttler" --glob "app/Config/**/*.php"
```

## Summary Table

| Component | CI4 Accessor | Typical Usage |
|-----------|-------------|---------------|
| Cache | `service('cache')` | Services for caching expensive queries |
| HTTP Client | `service('curlrequest')` | External API calls in Services |
| Email | `service('email')` | Notifications in Services |
| Rate Limiting | `service('throttler')` | RateLimitFilter on API routes |

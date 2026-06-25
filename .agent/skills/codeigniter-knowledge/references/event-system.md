# Event System in CodeIgniter 4

CI4 Events (publish/subscribe), framework lifecycle events, and priority management — standard CI4 Events usage without additional abstraction layers.

## CI4 Events Overview

CodeIgniter 4 provides a lightweight publish/subscribe Events system via `CodeIgniter\Events\Events`. Events are configured in `app/Config/Events.php` and are always globally enabled.

### Core Methods

| Method | Purpose |
|--------|---------|
| `Events::on($event, $callable, $priority)` | Subscribe listener to event |
| `Events::trigger($event, ...$args)` | Fire event, execute all listeners |
| `Events::simulate(bool)` | Skip event execution (testing) |
| `Events::removeListener($event, $callable)` | Unsubscribe specific listener |
| `Events::removeAllListeners($event)` | Remove all listeners for event |

### Subscribing to Events

```php
<?php

declare(strict_types=1);

// app/Config/Events.php
namespace Config;

use CodeIgniter\Events\Events;

// Closure
Events::on('order.confirmed', static function (array $data): void {
    service('logger')->info('Order confirmed', ['id' => $data['orderId']]);
});

// Static method
Events::on('order.confirmed', [OrderNotifier::class, 'onConfirmed']);

// Instance method
$handler = new OrderNotificationHandler();
Events::on('order.confirmed', [$handler, 'handle']);
```

### Triggering Events

```php
<?php

declare(strict_types=1);

use CodeIgniter\Events\Events;

// Simple trigger
Events::trigger('order.confirmed', ['orderId' => 123, 'total' => 5000]);

// With multiple arguments
Events::trigger('payment.processed', $orderId, $amount, $method);
```

### Priority System

Lower values execute first. Predefined constants:

| Constant | Value | Use Case |
|----------|-------|----------|
| `Events::PRIORITY_HIGH` | 10 | Critical listeners (logging, audit) |
| `Events::PRIORITY_NORMAL` | 100 | Standard listeners (notifications) |
| `Events::PRIORITY_LOW` | 200 | Non-critical (analytics, cleanup) |

```php
<?php

declare(strict_types=1);

use CodeIgniter\Events\Events;

Events::on('order.confirmed', [AuditLogger::class, 'log'], Events::PRIORITY_HIGH);
Events::on('order.confirmed', [EmailNotifier::class, 'notify'], Events::PRIORITY_NORMAL);
Events::on('order.confirmed', [AnalyticsTracker::class, 'track'], Events::PRIORITY_LOW);
```

### Stopping Propagation

If any subscriber returns `false`, execution of remaining listeners stops:

```php
<?php

declare(strict_types=1);

Events::on('order.cancellation_requested', static function (array $data): bool {
    if ($data['status'] === 'shipped') {
        return false; // Stop propagation — shipped orders cannot be cancelled
    }
    return true; // Continue to next listener
});
```

## Framework Lifecycle Events

### Web Application Events

| Event | When | Use Case |
|-------|------|----------|
| `pre_system` | Before routing/filters | Request logging, early CORS |
| `post_controller_constructor` | After controller instantiation | Dependency setup |
| `post_system` | Before final output | Response modification |

### CLI Events

| Event | When | Use Case |
|-------|------|----------|
| `pre_command` | Before command execution | CLI logging |
| `post_command` | After command execution | Cleanup |

### Library Events

| Event | When | Use Case |
|-------|------|----------|
| `email` | After email sent | Email audit log |
| `DBQuery` | After database query | Query logging, slow query detection |
| `migrate` | After migration | Schema change notification |

## Usage in Modules

Modules can trigger events and register listeners in `app/Config/Events.php`:

```php
<?php

declare(strict_types=1);

// app/Config/Events.php
namespace Config;

use CodeIgniter\Events\Events;

// Module event: contacts.save
Events::on('contacts.save', static function (array $data): void {
    service('logger')->info('Contact saved', ['id' => $data['id'], 'action' => $data['_action']]);
});

Events::on('contacts.delete', static function (array $data): void {
    service('logger')->info('Contact deleted', ['id' => $data['id']]);
});
```

### Module Event Naming Convention

Events follow the `{module_slug}.{action}` convention:

- `contacts.save` — Fired on creation/update
- `contacts.delete` — Fired on deletion
- `orders.save` — Fired on creation/update

Pass `_action => 'create'` inside the event payload so listeners can distinguish creates from updates:

```php
<?php

declare(strict_types=1);

// In ContactController create method:
Events::trigger('contacts.save', array_merge(['id' => $id, '_action' => 'create'], $data));
```

### Module Listener Registration

Module event listeners are **not auto-discovered** — they must be manually wired in `app/Config/Events.php`:

```php
<?php

declare(strict_types=1);

// app/Config/Events.php
namespace Config;

use CodeIgniter\Events\Events;

// Register module listeners
Events::on('deals.save',   ['App\Modules\Deals\Events\DealsEvents', 'onSave']);
Events::on('contacts.save', ['App\Modules\Contacts\Events\ContactsEvents', 'onSave']);
```

**Convention:**
- Listener classes live in `app/Modules/<Name>/Events/<Name>Events.php` as static methods.
- Registration is manual in `app/Config/Events.php` — there is no auto-discovery mechanism.
- Always use the `{slug}.{action}` naming convention.

## Testing Events

### Simulating Events

```php
<?php

declare(strict_types=1);

use CodeIgniter\Events\Events;
use PHPUnit\Framework\TestCase;

final class OrderConfirmationTest extends TestCase
{
    protected function setUp(): void
    {
        Events::simulate(true); // Disable real event handlers
    }

    protected function tearDown(): void
    {
        Events::simulate(false);
    }

    public function testConfirmOrderDispatchesEvent(): void
    {
        $dispatched = [];
        Events::on('order.confirmed', static function (array $data) use (&$dispatched): void {
            $dispatched[] = $data;
        });

        Events::trigger('order.confirmed', ['orderId' => 123]);
        $this->assertCount(1, $dispatched);
        $this->assertSame(123, $dispatched[0]['orderId']);
    }
}
```

## Detection Patterns

```bash
# Event listeners registered
Grep: "Events::on\(" --glob "app/Config/Events.php"

# Event triggers in controllers
Grep: "Events::trigger\(" --glob "app/Controllers/**/*.php"
Grep: "Events::trigger\(" --glob "app/Modules/*/Controllers/**/*.php"

# Event triggers in Services
Grep: "Events::trigger\(" --glob "app/Services/**/*.php"
```

## Summary Table

| Aspect | CI4 Component | Pattern |
|--------|--------------|---------|
| Subscribe | `Events::on()` | In `app/Config/Events.php` |
| Trigger | `Events::trigger()` | In Controllers / Services |
| Framework Events | `pre_system`, `post_system` | Lifecycle hooks |
| Testing | `Events::simulate()` | Disable handlers in test setUp |
| Module Events | `{slug}.{action}` | Standard naming convention |

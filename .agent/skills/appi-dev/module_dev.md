# appi — Module Development Guide

This guide explains how to create, build, and register new API-first modules within the **appi** architecture.

---

## 1. Module Structure
All modules reside in the `app/Modules/` directory. Because the application is split into a CI4 API and a React SPA, modules contain only backend API logic and optional React frontend component files to be registered with Vite.

A standard module (e.g., `deals`) follows this structure:

```text
app/Modules/Deals/
├── Config/
│   └── Routes.php          # Module-specific API routes
├── Controllers/
│   └── DealController.php  # API Controller (extends ApiController)
├── Database/
│   ├── Migrations/         # Database migrations (SQLite)
│   └── Seeds/              # Seed data
├── Entities/               # Entity classes (JSON serializable)
│   └── DealEntity.php
├── Events/                 # Module event listeners (e.g. Activity logging)
│   └── DealsEvents.php     # PascalCase slug events
├── Filters/                # Module authorization filters (optional)
│   └── DealsFilter.php
├── Language/               # Translation files (en/es/pt)
│   ├── en/
│   │   └── Deals.php
│   └── es/
│       └── Deals.php
├── Models/
│   └── DealModel.php
├── Services/               # Thin business logic services
│   └── DealService.php
├── ui/                     # React UI files (scanned by Vite)
│   ├── components/         # Module-specific React components
│   │   └── DealPipeline.jsx
│   └── index.js            # Entry point exposing routes/components
├── api_dev.md              # Module API Documentation
└── module.json             # Manifest file (Required)
```

> [!WARNING]
> Modules **MUST NOT** contain MVC Web Controllers (e.g., `Controllers/Deals.php`) or PHP HTML Views (`Views/` directory). All UI rendering belongs to the React codebase.

---

## 2. The `module.json` Manifest
Every module must declare its configurations, metadata, permissions, and API schemas in a `module.json` file.

```json
{
    "name": "Deals",
    "slug": "deals",
    "version": "1.0.0",
    "description": "Manage sales opportunities and pipelines.",
    "dependencies": [],
    "icon": "briefcase",
    "order": 10,
    "db_tables": ["deals_deals", "deals_history"],
    "permissions": {
        "deals.view": {
            "name": "View Deals",
            "description": "Can view deals list"
        },
        "deals.create": {
            "name": "Create Deals", 
            "description": "Can create new deals"
        },
        "deals.edit": {
            "name": "Edit Deals",
            "description": "Can edit existing deals"
        },
        "deals.delete": {
            "name": "Delete Deals",
            "description": "Can delete deals"
        }
    },
    "status": "active"
}
```

---

## 3. API Routing
Module routes must be registered strictly within the CodeIgniter `api` group, delegating authentication to Shield's filters:

```php
// app/Modules/Deals/Config/Routes.php
<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->group('api/deals', [
    'namespace' => 'App\Modules\Deals\Controllers',
    'filter'    => 'jwtAuth',
], static function ($routes): void {
    $routes->get('/',          'DealController::index');
    $routes->get('(:num)',     'DealController::show/$1');
    $routes->post('/',         'DealController::create');
    $routes->put('(:num)',     'DealController::update/$1');
    $routes->delete('(:num)',  'DealController::delete/$1');
});
```

---

## 4. UI Integration & Components

When building the module's React frontend under the `ui/` directory:
- Use standardized API calls to backend endpoints.
- Manage state and render the module's views seamlessly within the SPA.

```jsx
import React, { useEffect, useState } from 'react';
import api from '@/utils/api';

export default function DealDetails({ dealId }) {
    const [deal, setDeal] = useState(null);

    useEffect(() => {
        api.get(`/api/deals/${dealId}`).then(res => setDeal(res.data.data));
    }, [dealId]);

    if (!deal) return <p>Loading...</p>;

    return (
        <div className="deal-details-panel">
            <h2>{deal.title}</h2>
            <p>Stage: {deal.stage}</p>
        </div>
    );
}
```

---

## 5. Spark CLI Scaffolding

Use spark to generate module boilerplate:

```bash
# Generate module model
php spark make:model DealModel --namespace App\\Modules\\Deals

# Generate module entity
php spark make:entity DealEntity --namespace App\\Modules\\Deals

# Generate module migration
php spark make:migration CreateDealsTable --namespace App\\Modules\\Deals

# Generate module seeder
php spark make:seeder DealSeeder --namespace App\\Modules\\Deals
```

## 6. Event Publishing & Listener Discovery
Modules support full plug-and-play event triggers. Ensure events use the `{slug}.{action}` convention:
- **`deals.save`**: Fired on creation/update.
- **`deals.delete`**: Fired on deletion.

Ensure you pass `_action => 'create'` inside the event payload when creating a record so the global `ActivityService` correctly logs the change as "created" (instead of "updated"):

```php
// In Deals API Controller create method:
Events::trigger('deals.save', array_merge(['id' => $id, '_action' => 'create'], $data));
```

### Registering Module Event Listeners

Module event listeners are **not auto-discovered** — they must be manually registered in `app/Config/Events.php`:

```php
<?php

declare(strict_types=1);

// app/Config/Events.php
namespace Config;

use CodeIgniter\Events\Events;

// Register module listeners manually
Events::on('deals.save', static function (array $data): void {
    service('logger')->info('Deal saved', ['id' => $data['id']]);
});

Events::on('contacts.save', ['App\Modules\Contacts\Events\ContactsEvents', 'onSave']);
```

**Convention:**
- Module listener classes live in `app/Modules/<Name>/Events/<Name>Events.php` as static methods.
- Registration happens in `app/Config/Events.php` — there is no auto-discovery.
- Event names follow the `{slug}.{action}` pattern.

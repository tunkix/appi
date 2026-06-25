# appi — Module Development Guide

This guide explains how to create, build, and register new API-first modules within the **appi** architecture. Modules are **fully self-contained** — adding a module directory is all that's needed. The main app never hardcodes module names.

---

## 1. Module Structure
All modules reside in `app/Modules/<Name>/` (PascalCase directory). Each module is a self-contained unit: API routes, models, services, language files, React UI, and the `module.json` manifest.

A standard module (e.g., `Deals`) follows this structure:

```text
app/Modules/Deals/
├── Config/
│   └── Routes.php          # Module-specific API routes (auto-discovered by CI4)
├── Controllers/
│   └── DealController.php  # Extends App\Controllers\Api\ApiController
├── Database/
│   ├── Migrations/         # Database migrations
│   └── Seeds/              # Seed data
├── Entities/
│   └── DealEntity.php
├── Events/
│   └── DealsEvents.php     # Static event listener methods
├── Filters/                # Module-specific authorization filters (optional)
│   └── DealsFilter.php
├── Language/               # Translation files per locale
│   ├── en/
│   │   └── Deals.php
│   └── es/
│       └── Deals.php
├── Models/
│   └── DealModel.php
├── Services/
│   └── DealService.php
├── ui/                     # React UI files (auto-scanned by Vite)
│   ├── components/
│   │   └── DealPipeline.tsx
│   ├── types/
│   │   └── index.ts            # Module-specific TypeScript types
│   └── index.ts            # Entry point: exports routes + components
├── api_dev.md              # Module API documentation
└── module.json             # Manifest (Required)
```

> [!WARNING]
> Modules **MUST NOT** contain:
> - A `Views/` directory
> - Any `view()` calls
> - Any `redirect()` calls
> - MVC-style web controllers
>
> All UI rendering belongs to the React SPA under `ui/`.

---

## 2. The `module.json` Manifest
Every module must declare its metadata, permissions, API schema, and React routes in a `module.json` file. The main app discovers and serves this file dynamically — **never reference module names in core app code**.

The canonical reference is `app/Modules/Contacts/module.json`. The full schema is in `codeigniter-knowledge/references/module-schema.md`.

```json
{
    "slug":        "deals",
    "name":        "Deals",
    "description": "Manage sales opportunities and pipelines.",
    "icon":        "briefcase",
    "route":       "deals",
    "api_prefix":  "api/deals",
    "nav_group":   "sales",
    "order":       10,
    "version":     "1.0.0",
    "status":      "active",
    "db_tables":   ["deals_deals", "deals_history"],

    "client_routes": [
        {
            "path":      "/deals",
            "component": "DealsList",
            "layout":    "admin",
            "roles":     ["deals.view"]
        },
        {
            "path":      "/deals/new",
            "component": "DealForm",
            "layout":    "admin",
            "roles":     ["deals.create"]
        },
        {
            "path":      "/deals/edit/:id",
            "component": "DealForm",
            "layout":    "admin",
            "roles":     ["deals.edit"]
        }
    ],

    "api_schema": {
        "filters": {
            "search":   { "type": "string",  "description": "Search by title or notes" },
            "stage":    { "type": "select",  "description": "Filter by stage", "options": ["prospecting", "proposal", "won", "lost"] },
            "date_from": { "type": "date",  "description": "Created after date" },
            "date_to":   { "type": "date",  "description": "Created before date" }
        },
        "returned_fields": {
            "id":         { "type": "integer" },
            "title":      { "type": "string" },
            "stage":      { "type": "string" },
            "value":      { "type": "number" },
            "created_at": { "type": "string", "format": "date-time" }
        }
    },

    "form_schema": {
        "fields": [
            { "key": "title", "label": "Title",  "type": "text",     "required": true, "placeholder": "Deal title..." },
            { "key": "stage", "label": "Stage",  "type": "select",   "required": true, "options": [
                { "value": "prospecting", "label": "Prospecting" },
                { "value": "proposal",    "label": "Proposal" },
                { "value": "won",         "label": "Won" },
                { "value": "lost",        "label": "Lost" }
            ]},
            { "key": "value", "label": "Value", "type": "number",   "required": false }
        ]
    },

    "shareable_fields": {
        "deals_deals": {
            "fields": ["title", "stage", "notes"]
        }
    },

    "permissions": {
        "deals.view":   { "name": "View Deals",   "description": "Can view deals list" },
        "deals.create": { "name": "Create Deals", "description": "Can create new deals" },
        "deals.edit":   { "name": "Edit Deals",   "description": "Can edit existing deals" },
        "deals.delete": { "name": "Delete Deals", "description": "Can delete deals" }
    }
}
```

> **Sync rule**: Every permission key in `module.json` must also be added to `app/Config/AuthGroups.php` under `$permissions` and `$matrix`. `AuthGroups.php` is the **runtime enforcement source**; `module.json` drives the React UI.

---

## 3. API Routing (Auto-Discovered)
Module routes are **auto-discovered** by CI4's namespace discovery — no manual registration needed in the main `Routes.php`.

CI4 discovers `Config/Routes.php` within any PSR-4 namespace registered in `Config/Autoload.php`:

```php
// app/Config/Autoload.php — ensures Modules namespace is registered
public $psr4 = [
    APP_NAMESPACE => APPPATH,
    'App\\Modules\\Deals' => APPPATH . 'Modules/Deals',
    // OR: use Config/Modules.php with $shouldDiscover = true
];
```

Then the module's own `Config/Routes.php` self-registers:

```php
// app/Modules/Deals/Config/Routes.php
<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->group('api/deals', [
    'namespace' => 'App\Modules\Deals\Controllers',
    'filter'    => 'jwtAuth',
], static function ($routes): void {
    $routes->get('/',         'DealController::index');
    $routes->get('(:num)',    'DealController::show/$1');
    $routes->post('/',        'DealController::create');
    $routes->put('(:num)',    'DealController::update/$1');
    $routes->delete('(:num)', 'DealController::delete/$1');
});
```

> **No entry in `app/Config/Routes.php`** — the module manages its own routes.

---

## 4. UI Integration — TypeScript + Tailwind

Module React UI lives in the module's `ui/` directory. All UI code follows the same conventions as the main React SPA (see `frontend-react` skill): TypeScript strict mode, Tailwind CSS utilities, typed service calls.

Module-specific TypeScript types live in `app/Modules/<Name>/ui/types/index.ts`.

```tsx
// app/Modules/Deals/ui/types/index.ts
export interface Deal {
    id: number;
    title: string;
    stage: 'prospecting' | 'proposal' | 'won' | 'lost';
    value: number;
    created_at: string;
}
```

```tsx
// app/Modules/Deals/ui/components/DealDetails.tsx
import React, { useEffect, useState } from 'react';
import api from '@/services/api';
import type { Deal } from '../types';

interface DealDetailsProps {
    dealId: number;
}

export default function DealDetails({ dealId }: DealDetailsProps) {
    const [deal, setDeal] = useState<Deal | null>(null);

    useEffect(() => {
        api.get<{ status: string; data: Deal }>(`/api/deals/${dealId}`)
            .then(res => setDeal(res.data.data));
    }, [dealId]);

    if (!deal) return <p className="text-gray-400 text-sm">Loading...</p>;

    return (
        <div className="bg-white dark:bg-gray-800 rounded-lg p-4 shadow">
            <h2 className="text-lg font-semibold text-gray-900 dark:text-white">{deal.title}</h2>
            <p className="text-sm text-gray-500">Stage: {deal.stage}</p>
        </div>
    );
}
```

```ts
// app/Modules/Deals/ui/index.ts — Entry point consumed by Vite
export { default as DealsList } from './components/DealsList';
export { default as DealForm }  from './components/DealForm';
// component names must match client_routes[].component in module.json
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

Pass `_action => 'create'` inside the event payload when creating so the global `ActivityService` correctly logs the change:

```php
// In DealController::create()
Events::trigger('deals.save', array_merge(['id' => $id, '_action' => 'create'], $data));
```

### Registering Module Event Listeners

Module event listeners **must be registered** in `app/Config/Events.php`. CI4 does not auto-discover listeners:

```php
<?php

declare(strict_types=1);

// app/Config/Events.php
namespace Config;

use CodeIgniter\Events\Events;

// Register module listeners
Events::on('deals.save', ['App\Modules\Deals\Events\DealsEvents', 'onSave']);
Events::on('contacts.save', ['App\Modules\Contacts\Events\ContactsEvents', 'onSave']);
```

> [!WARNING]
> Event listeners are the **one exception** to zero-registration. CI4 has no auto-discovery for event listeners, so they must be explicitly registered in `app/Config/Events.php`. This is the standard CI4 pattern.

**Convention:**
- Listener classes live in `app/Modules/<Name>/Events/<Name>Events.php` as static methods.
- Event names follow the `{slug}.{action}` pattern.
- Keep `app/Config/Events.php` as the single place for all listener registrations.

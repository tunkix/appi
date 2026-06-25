# module.json Schema Reference

The `module.json` file is a machine-readable manifest that every appi module ships. It lives at `app/Modules/<Name>/module.json` (PascalCase directory) and is served to the React SPA via `GET /api/modules`. The `ModuleController` dynamically globs all `app/Modules/*/module.json` files at runtime — **no module name is ever hardcoded in the main app**. The SPA uses the manifest to drive routing, forms, permissions, and navigation.

## Required vs Optional Fields Table

| Field Key | Type | Requirement | Description |
|---|---|---|---|
| `slug` | `string` | **Required** | URL-safe identifier, e.g., `'contacts'` |
| `name` | `string` | **Required** | Human-readable name, e.g., `'Contacts'` |
| `icon` | `string` | **Required** | Lucide icon name, e.g., `'users'` |
| `route` | `string` | **Required** | Base SPA route segment, e.g., `'contacts'` |
| `api_prefix` | `string` | **Required** | Base module API route, e.g., `'api/contacts'` |
| `version` | `string` | **Required** | Semver string, e.g., `'1.0.0'` |
| `status` | `string` | **Required** | `'active' \| 'inactive' \| 'beta'` |
| `description` | `string` | Optional | Summary of module purpose |
| `nav_group` | `string` | Optional | Sidebar layout category, e.g., `'crm'`, `'settings'` |
| `order` | `integer` | Optional | Nav drawer sorting order |
| `client_routes` | `array` | Optional | React Router paths mapping to UI components |
| `form_schema` | `object` | Optional | Layout and descriptors for dynamic edit forms |
| `api_schema` | `object` | Optional | List headers, search filters, list fields schema |
| `permissions` | `object` | Optional | Shield permission keys mapping to descriptions |
| `db_tables` | `array` | Optional | List of tables this module owns / creates |
| `shareable_fields` | `object` | Optional | SmartPicker/AI Search indexable fields |
| `config` | `array` | Optional | Module settings configurations |

## Full Schema

```json
{
  "slug":        "string (required) — URL-safe identifier, e.g. 'contacts'",
  "name":        "string (required) — Human-readable display name, e.g. 'Contacts'",
  "description": "string (optional) — Short description for the admin module list",
  "icon":        "string (required) — Icon name (Lucide icon set), e.g. 'users'",
  "route":       "string (required) — Base SPA route segment, e.g. 'contacts'",
  "api_prefix":  "string (required) — Base API route, e.g. 'api/contacts'",
  "nav_group":   "string (optional) — Sidebar grouping, e.g. 'crm', 'settings', 'core'",
  "order":       "integer (optional) — Display order in navigation sidebar",
  "version":     "string (required) — Semver, e.g. '1.0.0'",
  "status":      "string (required) — 'active' | 'inactive' | 'beta'"
}
```

## Sections

### `api_schema` — List View Metadata

Drives dynamic list/filter views in the SPA. The SPA uses this to build filter forms and column headers without knowing the module's data model.

```json
"api_schema": {
  "filters": {
    "<field_key>": {
      "type":        "string | integer | boolean | date | select",
      "description": "Human-readable hint",
      "format":      "YYYY-MM-DD (for date fields)",
      "options":     ["opt1", "opt2"] // for select type
    }
  },
  "returned_fields": {
    "<field_key>": {
      "type":       "string | integer | boolean | array | object",
      "format":     "date-time (optional)",
      "properties": {} // for nested objects
    }
  },
  "query_tool": "string — name of the registered AI query tool for this module"
}
```

### `client_routes` — React Router Definitions

Array of routes the SPA registers in React Router at boot.

```json
"client_routes": [
  {
    "path":      "/contacts",           // React Router path
    "component": "ContactsList",        // Component name (resolved in SPA module registry)
    "layout":    "admin",               // "admin" | "public"
    "permissions": ["contacts.view"]      // Shield permissions required to access this route
  },
  {
    "path":      "/contacts/new",
    "component": "ContactForm",
    "layout":    "admin",
    "permissions": ["contacts.create"]
  },
  {
    "path":      "/contacts/edit/:id",
    "component": "ContactForm",
    "layout":    "admin",
    "permissions": ["contacts.edit"]
  }
]
```

**Layout values:**
- `"admin"` — Renders inside the admin shell (sidebar, topbar, auth required)
- `"public"` — Full-page layout, no auth required

### `form_schema` — Dynamic Form Fields

Drives auto-generated create/edit forms. The SPA renders these without module-specific JSX.

```json
"form_schema": {
  "fields": [
    {
      "key":         "first_name",       // Maps to API field name
      "label":       "First Name",       // Display label (i18n key or plain string)
      "type":        "text",             // See field types below
      "required":    true,
      "placeholder": "Enter first name..."
    },
    {
      "key":     "status",
      "label":   "Status",
      "type":    "select",
      "options": [
        { "value": "active",   "label": "Active" },
        { "value": "inactive", "label": "Inactive" }
      ],
      "required": true
    }
  ]
}
```

**Supported field types:**

| Type | Renders as |
|------|-----------|
| `text` | `<input type="text">` |
| `email` | `<input type="email">` |
| `password` | `<input type="password">` |
| `number` | `<input type="number">` |
| `textarea` | `<textarea>` |
| `select` | `<select>` with `options` array |
| `checkbox` | `<input type="checkbox">` |
| `date` | `<input type="date">` |
| `datetime` | `<input type="datetime-local">` |
| `hidden` | `<input type="hidden">` |
| `repeater` | Repeatable field group (for nested arrays like `methods`) |

### `permissions` — Shield Permission Definitions

Map of permission keys to human-readable metadata. These must also be registered in `app/Config/AuthGroups.php`.

```json
"permissions": {
  "contacts.view": {
    "name":        "View Contacts",
    "description": "Can view contact list and details"
  },
  "contacts.create": {
    "name":        "Create Contacts",
    "description": "Can create new contacts"
  },
  "contacts.manage": {
    "name":        "Manage Contacts",
    "description": "Full access: create, edit, delete, export"
  }
}
```

> **Rule:** Every permission key in `permissions` must match a key in `AuthGroups::$permissions`. If a key exists in `module.json` but not in `AuthGroups`, authorization checks will silently fail.

### `db_tables` — Owned Database Tables

List of tables this module owns. Used for migrations, cleanup, and cross-module awareness.

```json
"db_tables": ["contacts_contacts", "contacts_methods", "contacts_labels"]
```

**Convention:** prefix table names with the module slug to avoid collisions (`contacts_*`, `orders_*`, etc.).

### `shareable_fields` — Cross-Module AI Query Fields

Fields exposed for cross-module queries (e.g. AI assistant searching across modules).

```json
"shareable_fields": {
  "contacts_contacts": {
    "fields":      ["first_name", "last_name", "company", "job_title", "notes"],
    "field_types": { "created_at": "date", "methods": "json" }
  },
  "contacts_methods": {
    "fields": ["value"],
    "index":  "exclude"   // "exclude" = do not include in global full-text index
  }
}
```

### `config` — Module Settings

Editable settings exposed in the admin settings UI.

```json
"config": [
  {
    "key":     "ai_instructions",
    "label":   "AI Instructions",
    "type":    "textarea",
    "default": "You are a helpful assistant..."
  }
]
```

Config settings are stored in the app's settings table and editable via `GET/PUT /api/settings?module=contacts`.

## Complete Example

See `app/Modules/Contacts/module.json` for the canonical reference implementation.

## Validation Checklist

When creating a new module's `module.json`:

- [ ] `slug` is URL-safe, lowercase, and unique across all modules (e.g. `deals`)
- [ ] Module **directory name** is PascalCase (e.g. `app/Modules/Deals/`)
- [ ] Database table prefix matches the slug in snake_case (e.g. `deals_deals`)
- [ ] `api_prefix` matches the route group registered in the module's own `Config/Routes.php`
- [ ] All `client_routes[].permissions` values exist as keys in `permissions`
- [ ] All `permissions` keys are **also registered** in `app/Config/AuthGroups.php` under `$permissions` and `$matrix` — see [security.md](security.md)
- [ ] `db_tables` entries follow the `<slug>_<table>` naming convention (snake_case)
- [ ] `form_schema.fields` keys match `$allowedFields` in the module's Model
- [ ] `status` is set to `"active"` before deploying
- [ ] `nav_group` is set if the module should appear in a sidebar navigation group
- [ ] Module **never appears by name** in any core app file (`app/Config/Routes.php`, `app/Config/Events.php`, etc.) except for event listener registration

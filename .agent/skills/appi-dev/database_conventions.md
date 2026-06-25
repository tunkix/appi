# Database Conventions

This document is the single source of truth for all database naming, migration, and model conventions in the **appi** codebase.

---

## 1. Table Naming

| Scope | Pattern | Example |
|---|---|---|
| Core app tables | `appi_{plural_snake}` | `appi_projects`, `appi_tasks`, `appi_config` |
| Module tables | `{slug}_{plural_snake}` | `contacts_contacts`, `contacts_methods`, `deals_deals` |
| Package tables | Vendor naming (leave as-is) | `users`, `auth_identities`, `settings`, `migrations` |
| Pivot tables | `{table_a}_{table_b}` (alphabetical) | `appi_users_roles`, `contacts_deals` |

### Currently in use

| Table | Group | Belongs To |
|---|---|---|
| `migrations` | Framework | CI4 core |
| `users` | Package | Shield |
| `auth_identities` | Package | Shield |
| `auth_logins` | Package | Shield |
| `auth_token_logins` | Package | Shield |
| `auth_remember_tokens` | Package | Shield |
| `auth_groups_users` | Package | Shield |
| `auth_permissions_users` | Package | Shield |
| `settings` | Package | Settings |
| `contacts_contacts` | Module | Contacts module |
| `contacts_methods` | Module | Contacts module |

---

## 2. Column Conventions

| Purpose | Name | Type | Notes |
|---|---|---|---|
| Primary key | `id` | `INT UNSIGNED` / `BIGINT` | Auto-increment, always |
| Foreign key | `{referenced_table_singular}_id` | Same type as referenced PK | e.g. `user_id`, `appi_client_id` |
| Created timestamp | `created_at` | `DATETIME` | Nullable, auto-set by CI4 Model |
| Updated timestamp | `updated_at` | `DATETIME` | Nullable, auto-set by CI4 Model |
| Deleted timestamp | `deleted_at` | `DATETIME` | Nullable, enables soft deletes |
| Status | `status` | `VARCHAR` | Avoid ENUM (painful to migrate); validate in code |
| Sort order | `sort_order` | `INT` | Nullable, for ordered lists |
| Public identifier | `uuid` | `CHAR(36)` | Optional, for public-facing references |

### Column naming rules

- All columns **lowercase `snake_case`**
- Boolean columns: prefix with `is_`, `has_`, or `can_` (e.g. `is_active`, `has_billing`)
- Timestamps always end in `_at`
- Avoid abbreviations: `description` not `desc`, `organization` not `org`
- JSON columns: `VARCHAR`/`TEXT` with JSON validation in the Model, or use native JSON type if the driver supports it

---

## 3. Migration Conventions

### Filename format
```
YYYY-MM-DD-HHIISS_DescriptiveCamelCase.php
```
Example: `2026-06-24-000000_EnableSqliteWalMode.php`

### Required preamble
```php
<?php

declare(strict_types=1);

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
```

### Structure
```php
final class CreateAppiProjectsTable extends Migration
{
    public function up(): void
    {
        $this->forge->addField([
            'id'         => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'name'       => ['type' => 'VARCHAR', 'constraint' => 255],
            'status'     => ['type' => 'VARCHAR', 'constraint' => 50, 'default' => 'active'],
            'user_id'    => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true],
            'created_at' => ['type' => 'DATETIME', 'null' => true],
            'updated_at' => ['type' => 'DATETIME', 'null' => true],
            'deleted_at' => ['type' => 'DATETIME', 'null' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('user_id', 'users', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('appi_projects');
    }

    public function down(): void
    {
        $this->db->disableForeignKeyChecks();
        $this->forge->dropTable('appi_projects');
        $this->db->enableForeignKeyChecks();
    }
}
```

### Rules
- Always include `up()` **and** `down()`
- `down()` must wrap table drops in `disableForeignKeyChecks()` / `enableForeignKeyChecks()`
- One migration per logical change (create table, add column, add index — each in its own file)
- Module migrations go in `app/Modules/{slug}/Database/Migrations/` with namespace `App\Modules\{Name}\Database\Migrations`
- Core app migrations go in `app/Database/Migrations/` with namespace `App\Database\Migrations`

---

## 4. Model Conventions

Every model **must** explicitly declare:
```php
<?php

declare(strict_types=1);

namespace App\Models;

use CodeIgniter\Model;

final class ProjectModel extends Model
{
    protected $table         = 'appi_projects';
    protected $primaryKey    = 'id';
    protected $useAutoIncrement = true;
    protected $useSoftDeletes   = true;
    protected $useTimestamps    = true;
    protected $dateFormat       = 'datetime';
    protected $createdField     = 'created_at';
    protected $updatedField     = 'updated_at';
    protected $deletedField     = 'deleted_at';
    protected $allowedFields    = ['name', 'status', 'user_id', 'sort_order'];
    protected $validationRules  = [
        'name'   => 'required|max_length[255]',
        'status' => 'permit_empty|in_list[active,inactive,archived]',
    ];
    protected $validationMessages = [];
    protected $skipValidation     = false;
    protected $cleanValidationRules = true;
}
```

### Rules
- Model class name = `{Entity}PascalCase` + `Model` (e.g. `ProjectModel`)
- Namespace: `App\Models` for core, `App\Modules\{Name}\Models` for modules
- Always set `$table`, `$primaryKey`, `$useSoftDeletes`, `$useTimestamps`, `$allowedFields`, `$validationRules`
- Use `$casts` for JSON columns where needed
- Return type: `final class`

---

## 5. Index & Foreign Key Naming

Let CI4 auto-name indexes and foreign keys. CI4 generates:
- Primary key: `PRIMARY`
- Indexes: `{table}_{column}_index`
- Foreign keys: `{table}_{referenced_table}_{referenced_column}_foreign`

If you need explicit names, use:
- Index: `idx_{table}_{column}`
- Unique: `uq_{table}_{column}`
- Foreign key: `fk_{table}_{referenced_table}`

---

## 6. Config Reference

| Config | Location | Purpose |
|---|---|---|
| `Database.php` | `app/Config/Database.php` | Connection settings, `DBPrefix` is empty |
| `Auth.php` (`$tables`) | `app/Config/Auth.php:409` | Shield table name mapping |
| `module.json` | `app/Modules/{slug}/module.json` | Module's `db_tables` array |

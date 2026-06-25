# Persistence in CodeIgniter 4

CI4 Model, Query Builder, Entity classes, migrations, and seeders — standard CI4 persistence patterns.

## CI4 Model Class

### Basic Model

```php
<?php

declare(strict_types=1);

namespace App\Models;

use App\Entities\ProductEntity;
use CodeIgniter\Model;

final class ProductModel extends Model
{
    protected $table            = 'products';
    protected $primaryKey       = 'id';
    protected $returnType       = ProductEntity::class;
    protected $useAutoIncrement = true;
    protected $useSoftDeletes   = true;
    protected $useTimestamps    = true;

    protected $allowedFields = [
        'name',
        'sku',
        'price',
        'category_id',
        'description',
        'is_active',
    ];

    protected $validationRules = [
        'name'  => 'required|min_length[3]|max_length[255]',
        'sku'   => 'required|alpha_numeric|is_unique[products.sku,id,{id}]',
        'price' => 'required|numeric|greater_than[0]',
    ];

    protected $validationMessages = [
        'sku' => [
            'is_unique' => 'This SKU already exists',
        ],
    ];

    protected $beforeInsert = ['generateUuid'];
    protected $beforeUpdate = ['updateTimestamp'];

    /** @param array<string, mixed> $data */
    protected function generateUuid(array $data): array
    {
        if (!isset($data['data']['id'])) {
            $data['data']['id'] = bin2hex(random_bytes(16));
        }
        return $data;
    }
}
```

### Model Methods

| Method | Description | Returns |
|--------|-------------|---------|
| `find($id)` | Find by primary key | Entity or array |
| `findAll($limit, $offset)` | Find all records | Array of entities |
| `first()` | First matching record | Entity or null |
| `insert($data)` | Insert record | Insert ID or false |
| `update($id, $data)` | Update record | bool |
| `delete($id)` | Delete (or soft-delete) | bool |
| `where($field, $value)` | Add WHERE clause | Model (chainable) |
| `orderBy($field, $dir)` | Add ORDER BY | Model (chainable) |
| `paginate($perPage)` | Paginate results | Array |
| `select($columns)` | Set SELECT columns | Model (chainable) |
| `join($table, $cond, $type)` | Add JOIN | Model (chainable) |
| `groupBy($field)` | Add GROUP BY | Model (chainable) |
| `having($field, $value)` | Add HAVING | Model (chainable) |
| `countAllResults($reset)` | Count results | int |
| `selectSum($field)` | SUM aggregation | Model (chainable) |

## CI4 Entity Classes

### Entity Definition

```php
<?php

declare(strict_types=1);

namespace App\Entities;

use CodeIgniter\Entity\Entity;

final class ProductEntity extends Entity
{
    /** @var array<string, string> */
    protected $casts = [
        'id'          => 'string',
        'price'       => 'integer',
        'is_active'   => 'boolean',
        'category_id' => 'integer',
        'created_at'  => 'datetime',
        'updated_at'  => 'datetime',
        'deleted_at'  => '?datetime',
    ];

    /** @var array<string, string> */
    protected $datamap = [
        'categoryId' => 'category_id',
        'isActive'   => 'is_active',
        'createdAt'  => 'created_at',
    ];

    public function getPriceFormatted(): string
    {
        return number_format($this->attributes['price'] / 100, 2);
    }
}
```

### Casts Reference

| Cast Type | Description |
|-----------|-------------|
| `string` | Cast to string |
| `integer` / `int` | Cast to integer |
| `float` | Cast to float |
| `double` | Cast to double |
| `boolean` / `bool` | Cast to boolean |
| `datetime` | Cast to DateTime |
| `timestamp` | Cast to Unix timestamp |
| `url` | Cast to URL |
| `json` | Decode JSON string to array |
| `array` | Cast to array |
| `object` | Cast to object |
| `?type` | Nullable version of any type |

## Query Builder

### Common Operations

```php
<?php

declare(strict_types=1);

// Using Query Builder via Model
$model = new ProductModel();

// Complex query
$results = $model
    ->select('products.*, categories.name as category_name')
    ->join('categories', 'categories.id = products.category_id')
    ->where('products.is_active', true)
    ->where('products.price >=', 1000)
    ->whereIn('products.category_id', [1, 2, 3])
    ->orderBy('products.created_at', 'DESC')
    ->limit(20, 0)
    ->findAll();

// Aggregate queries
$count = $model->where('is_active', true)->countAllResults();
$total = $model->selectSum('price')->first();

// Raw query (use sparingly)
$db = \Config\Database::connect();
$query = $db->query('SELECT * FROM products WHERE price > ?', [1000]);
$rows = $query->getResultArray();
```

### Subqueries

```php
<?php

declare(strict_types=1);

$db = \Config\Database::connect();
$builder = $db->table('orders');

$subquery = $db->table('order_items')
    ->select('order_id')
    ->where('product_id', 42);

$orders = $builder
    ->whereIn('id', $subquery)
    ->get()
    ->getResultArray();
```

## Migrations

### Creating Migrations

```bash
php spark make:migration CreateOrdersTable
```

### Migration File

```php
<?php

declare(strict_types=1);

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

final class CreateOrdersTable extends Migration
{
    public function up(): void
    {
        $this->forge->addField([
            'id' => [
                'type'       => 'CHAR',
                'constraint' => 36,
            ],
            'customer_id' => [
                'type'       => 'CHAR',
                'constraint' => 36,
            ],
            'status' => [
                'type'       => 'ENUM',
                'constraint' => ['draft', 'confirmed', 'shipped', 'cancelled'],
                'default'    => 'draft',
            ],
            'total' => [
                'type'       => 'BIGINT',
                'unsigned'   => true,
                'default'    => 0,
            ],
            'notes' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->addKey('customer_id');
        $this->forge->addKey('status');
        $this->forge->addKey('created_at');

        $this->forge->createTable('orders');
    }

    public function down(): void
    {
        $this->forge->dropTable('orders');
    }
}
```

### Running Migrations

```bash
php spark migrate              # Run all pending migrations
php spark migrate:rollback     # Rollback last batch
php spark migrate:status       # Show migration status
php spark migrate:refresh      # Rollback all, then migrate
```

## Spark CLI Code Generation

Use spark to generate standard CI4 classes. For module-specific classes, use the `--namespace` flag:

```bash
# Generate Models
php spark make:model ContactModel
php spark make:model Deals\DealModel --namespace App\\Modules\\Deals

# Generate Entities
php spark make:entity ContactEntity
php spark make:entity Deals\\DealEntity --namespace App\\Modules\\Deals

# Generate Migrations
php spark make:migration CreateContactsTable
php spark make:migration CreateDealsTable --namespace App\\Modules\\Deals

# Generate Seeders
php spark make:seeder ContactSeeder

# Generate Controllers (API)
php spark make:controller ContactController --restful --namespace App\\Controllers\\Api

# Generate Filters
php spark make:filter CorsFilter
```

## Seeders

```php
<?php

declare(strict_types=1);

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

final class OrderSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'id'          => 'order-001',
                'customer_id' => 'cust-001',
                'status'      => 'confirmed',
                'total'       => 15000,
                'created_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'id'          => 'order-002',
                'customer_id' => 'cust-002',
                'status'      => 'draft',
                'total'       => 8500,
                'created_at'  => date('Y-m-d H:i:s'),
            ],
        ];

        $this->db->table('orders')->insertBatch($data);
    }
}
```

## Module Migrations

Module migrations live inside the module's `Database/Migrations/` directory:

```php
<?php

declare(strict_types=1);

namespace App\Modules\Contacts\Database\Migrations;

use CodeIgniter\Database\Migration;

final class CreateContactsTables extends Migration
{
    public function up(): void
    {
        // contacts_contacts table
        $this->forge->addField([
            'id'         => ['type' => 'INTEGER', 'constraint' => 11, 'auto_increment' => true],
            'first_name' => ['type' => 'VARCHAR', 'constraint' => 100],
            'last_name'  => ['type' => 'VARCHAR', 'constraint' => 100],
            'company'    => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
            'job_title'  => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
            'notes'      => ['type' => 'TEXT', 'null' => true],
            'created_at' => ['type' => 'DATETIME', 'null' => true],
            'updated_at' => ['type' => 'DATETIME', 'null' => true],
            'deleted_at' => ['type' => 'DATETIME', 'null' => true],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('contacts_contacts');

        // contacts_methods table
        $this->forge->addField([
            'id'         => ['type' => 'INTEGER', 'constraint' => 11, 'auto_increment' => true],
            'contact_id' => ['type' => 'INTEGER', 'constraint' => 11],
            'type'       => ['type' => 'VARCHAR', 'constraint' => 20],
            'value'      => ['type' => 'VARCHAR', 'constraint' => 255],
            'created_at' => ['type' => 'DATETIME', 'null' => true],
            'updated_at' => ['type' => 'DATETIME', 'null' => true],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->addForeignKey('contact_id', 'contacts_contacts', 'id', '', '', 'fk_contact_methods');
        $this->forge->createTable('contacts_methods');
    }

    public function down(): void
    {
        $this->forge->dropTable('contacts_methods');
        $this->forge->dropTable('contacts_contacts');
    }
}
```

## Detection Patterns

```bash
# Find all Models
Grep: "extends Model" --glob "app/Models/**/*.php"
Grep: "extends Model" --glob "app/Modules/*/Models/**/*.php"

# Find Entity classes
Grep: "extends Entity" --glob "app/Entities/**/*.php"
Grep: "extends Entity" --glob "app/Modules/*/Entities/**/*.php"

# Find migrations
Glob: app/Database/Migrations/*.php
Glob: app/Modules/*/Database/Migrations/*.php

# Find direct DB usage (potential violations)
Grep: "\\\\Config\\\\Database::connect\(\)|db->query\(" --glob "app/Controllers/**/*.php"

# Find raw SQL strings
Grep: "->query\(|->rawQuery\(" --glob "app/**/*.php"

# Models with business logic (warning)
Grep: "function (calculate|validate|process|check)" --glob "app/Models/**/*.php"

# Seeders
Glob: app/Database/Seeds/*.php
```

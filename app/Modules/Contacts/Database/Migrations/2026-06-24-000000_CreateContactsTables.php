<?php

declare(strict_types=1);

namespace App\Modules\Contacts\Database\Migrations;

use CodeIgniter\Database\Migration;

final class CreateContactsTables extends Migration
{
    public function up(): void
    {
        $this->forge->addField([
            'id'         => ['type' => 'INTEGER', 'constraint' => 11, 'auto_increment' => true],
            'first_name' => ['type' => 'VARCHAR', 'constraint' => 100],
            'last_name'  => ['type' => 'VARCHAR', 'constraint' => 100],
            'company'    => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
            'job_title'  => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
            'email'      => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
            'notes'      => ['type' => 'TEXT', 'null' => true],
            'sort_order' => ['type' => 'INT', 'null' => true],
            'created_at' => ['type' => 'DATETIME', 'null' => true],
            'updated_at' => ['type' => 'DATETIME', 'null' => true],
            'deleted_at' => ['type' => 'DATETIME', 'null' => true],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('contacts_contacts');

        $this->forge->addField([
            'id'         => ['type' => 'INTEGER', 'constraint' => 11, 'auto_increment' => true],
            'contact_id' => ['type' => 'INTEGER', 'constraint' => 11],
            'type'       => ['type' => 'VARCHAR', 'constraint' => 20],
            'value'      => ['type' => 'VARCHAR', 'constraint' => 255],
            'created_at' => ['type' => 'DATETIME', 'null' => true],
            'updated_at' => ['type' => 'DATETIME', 'null' => true],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->addForeignKey('contact_id', 'contacts_contacts', 'id', '', '', 'fk_contacts_methods');
        $this->forge->createTable('contacts_methods');
    }

    public function down(): void
    {
        $this->db->disableForeignKeyChecks();
        $this->forge->dropTable('contacts_methods');
        $this->forge->dropTable('contacts_contacts');
        $this->db->enableForeignKeyChecks();
    }
}

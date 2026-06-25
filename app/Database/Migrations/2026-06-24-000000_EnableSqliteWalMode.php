<?php

declare(strict_types=1);

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

final class EnableSqliteWalMode extends Migration
{
    public function up(): void
    {
        $this->db->query('PRAGMA journal_mode = WAL');
    }

    public function down(): void
    {
        $this->db->query('PRAGMA journal_mode = DELETE');
    }
}

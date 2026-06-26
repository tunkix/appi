<?php

declare(strict_types=1);

namespace App\Entities;

use CodeIgniter\Entity\Entity;

final class UserEntity extends Entity
{
    protected $casts = [
        'id'         => 'integer',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'deleted_at' => '?datetime',
    ];
}

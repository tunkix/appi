<?php

declare(strict_types=1);

namespace App\Entities;

use CodeIgniter\Shield\Entities\User as ShieldUser;

final class UserEntity extends ShieldUser
{
    protected $casts = [
        'id'         => 'integer',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'deleted_at' => '?datetime',
    ];

    public function jsonSerialize(): array
    {
        $data = parent::jsonSerialize();
        $data['email'] = $this->getEmail();

        return $data;
    }
}

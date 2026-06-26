<?php

declare(strict_types=1);

namespace App\Modules\Contacts\Entities;

use CodeIgniter\Entity\Entity;

final class ContactEntity extends Entity
{
    protected $casts = [
        'id'         => 'integer',
        'first_name' => 'string',
        'last_name'  => 'string',
        'company'    => '?string',
        'job_title'  => '?string',
        'email'      => '?string',
        'notes'      => '?string',
        'sort_order' => '?integer',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'deleted_at' => '?datetime',
    ];

    public function getName(): string
    {
        return trim($this->attributes['first_name'] . ' ' . $this->attributes['last_name']);
    }
}

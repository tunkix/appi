<?php

declare(strict_types=1);

namespace App\Models\Core;

use CodeIgniter\Shield\Models\UserModel as ShieldUserModel;

final class UserModel extends ShieldUserModel
{
    protected $allowedFields = [
        'username', 'email', 'password',
    ];
}

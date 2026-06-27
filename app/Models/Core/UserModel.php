<?php

declare(strict_types=1);

namespace App\Models\Core;

use App\Entities\UserEntity;
use CodeIgniter\Shield\Models\UserModel as ShieldUserModel;

final class UserModel extends ShieldUserModel
{
    protected $returnType = UserEntity::class;

    protected $allowedFields = [
        'username',
    ];
}

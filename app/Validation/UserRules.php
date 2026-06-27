<?php

declare(strict_types=1);

namespace App\Validation;

use CodeIgniter\Shield\Authentication\Authenticators\Session;

class UserRules
{
    public function unique_email(string $value, ?string $params = ''): bool
    {
        $identityModel = model(\CodeIgniter\Shield\Models\UserIdentityModel::class);

        $builder = $identityModel
            ->where('type', Session::ID_TYPE_EMAIL_PASSWORD)
            ->where('secret', $value);

        if ($params !== '') {
            $builder->where('user_id !=', $params);
        }

        return $builder->first() === null;
    }
}

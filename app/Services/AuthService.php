<?php

declare(strict_types=1);

namespace App\Services;

use CodeIgniter\Shield\Authentication\JWTManager;

final readonly class AuthService
{
    public function login(array $credentials): array
    {
        $result = auth('session')->attempt($credentials);

        if (! $result->isOK()) {
            return [];
        }

        $user = auth('session')->getUser();

        /** @var JWTManager $jwtManager */
        $jwtManager = service('jwtmanager');

        return [
            'token'      => $jwtManager->generateToken($user),
            'expires_in' => 3600,
            'user'       => [
                'id'    => $user->id,
                'email' => $user->email,
            ],
        ];
    }

    public function refresh(string $token): array
    {
        $result = auth('jwt')->check(['token' => $token]);

        if (! $result->isOK()) {
            return [];
        }

        $user = $result->extraInfo();

        /** @var JWTManager $jwtManager */
        $jwtManager = service('jwtmanager');

        return [
            'token'      => $jwtManager->generateToken($user),
            'expires_in' => 3600,
        ];
    }

    public function logout(): void
    {
        auth('jwt')->logout();
        auth('session')->logout();
    }

    public function me(): ?object
    {
        $user = auth('jwt')->user();

        if ($user === null) {
            return null;
        }

        $groups = $user->getGroups();
        $matrix = setting('AuthGroups.matrix');
        $allPermissions = setting('AuthGroups.permissions');

        $resolved = [];
        foreach ($groups as $group) {
            if (! isset($matrix[$group])) {
                continue;
            }
            foreach ($matrix[$group] as $perm) {
                if (str_ends_with($perm, '.*')) {
                    $prefix = substr($perm, 0, -2);
                    foreach (array_keys($allPermissions) as $available) {
                        if (str_starts_with($available, $prefix . '.')) {
                            $resolved[] = $available;
                        }
                    }
                } else {
                    $resolved[] = $perm;
                }
            }
        }

        $merged = array_values(array_unique(array_merge($resolved, $user->getPermissions())));
        $user->setPermissionsCache($merged);
        $user->permissions = $merged;
        $user->groups      = $groups;

        return $user;
    }
}

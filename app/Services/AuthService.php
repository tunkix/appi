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
        auth('session')->logout();
    }

    public function me(): ?object
    {
        $user = auth('jwt')->user();

        if ($user === null) {
            return null;
        }

        $user->permissions = $user->getPermissions();
        $user->groups      = $user->getGroups();

        return $user;
    }
}

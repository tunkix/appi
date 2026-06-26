<?php

declare(strict_types=1);

namespace Config;

use CodeIgniter\Shield\Config\AuthJWT as ShieldAuthJWT;

class AuthJWT extends ShieldAuthJWT
{
    public string $authenticatorHeader = 'Authorization';

    public array $defaultClaims = [
        'iss' => 'appi',
    ];

    /**
     * @var array<string, array<int, array<string, string>>>
     */
    public array $keys = [
        'default' => [
            [
                'kid'    => '',
                'alg'    => 'HS256',
                'secret' => '94ddf151460ab6ecdba645523f2607244a476757ec38a47ab15080596dafc89c',
            ],
        ],
    ];

    public int $timeToLive = 3600;

    public int $recordLoginAttempt = 0;
}

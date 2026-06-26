<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Controllers\Api\ApiController;
use CodeIgniter\HTTP\ResponseInterface;

/**
 * Health-check endpoint for the appi API.
 * GET / → { "app": "appi", "status": "ok", "version": "1.0" }
 */
final class Home extends ApiController
{
    public function index(): ResponseInterface
    {
        return $this->respond([
            'app'     => 'appi',
            'status'  => 'ok',
            'version' => '1.0',
        ]);
    }
}

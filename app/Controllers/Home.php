<?php

declare(strict_types=1);

namespace App\Controllers;

use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\RESTful\ResourceController;

/**
 * Health-check endpoint for the appi API.
 * GET / → { "app": "appi", "status": "ok", "version": "1.0" }
 */
final class Home extends ResourceController
{
    protected $format = 'json';

    public function index(): ResponseInterface
    {
        return $this->respond([
            'app'     => 'appi',
            'status'  => 'ok',
            'version' => '1.0',
        ]);
    }
}

<?php

declare(strict_types=1);

namespace App\Controllers\Api;

use CodeIgniter\HTTP\ResponseInterface;

final class ModuleController extends ApiController
{
    public function index(): ResponseInterface
    {
        $modules = service('moduleService')->findAll();

        return $this->respond([
            'status' => 'success',
            'data'   => $modules,
        ]);
    }
}

<?php

declare(strict_types=1);

namespace App\Controllers\Api;

use CodeIgniter\HTTP\ResponseInterface;

final class SettingsController extends ApiController
{
    public function index(): ResponseInterface
    {
        $settings = service('settingsService')->findAll();

        return $this->respond([
            'status' => 'success',
            'data'   => $settings,
        ]);
    }

    public function update(): ResponseInterface
    {
        $data = $this->request->getJSON(assoc: true);

        if ($data === null) {
            return $this->response
                ->setStatusCode(422)
                ->setJSON([
                    'status' => 'error',
                    'message' => 'Invalid JSON body.',
                ]);
        }

        service('settingsService')->update($data);

        return $this->respond(['status' => 'updated']);
    }
}

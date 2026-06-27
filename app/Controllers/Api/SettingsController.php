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

    public function update($id = null): ResponseInterface
    {
        if (! $this->validate([
            'company_name'      => 'permit_empty|max_length[255]',
            'app_logo_url'      => 'permit_empty|valid_url_strict|max_length[500]',
            'default_locale'    => 'permit_empty|in_list[en,es,pt,fr,de]',
            'date_format'       => 'permit_empty|max_length[20]',
            'time_format'       => 'permit_empty|max_length[20]',
            'currency'          => 'permit_empty|max_length[3]',
            'thousand_separator'=> 'permit_empty|max_length[1]',
            'decimal_separator' => 'permit_empty|max_length[1]',
        ])) {
            return $this->response
                ->setStatusCode(422)
                ->setJSON([
                    'status' => 'error',
                    'errors' => $this->validator->getErrors(),
                ]);
        }

        service('settingsService')->update($this->validator->getValidated());

        return $this->respond(['status' => 'updated']);
    }
}

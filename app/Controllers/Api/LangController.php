<?php

declare(strict_types=1);

namespace App\Controllers\Api;

use CodeIgniter\HTTP\ResponseInterface;

final class LangController extends ApiController
{
    public function index(): ResponseInterface
    {
        $locale = $this->request->getGet('locale')
            ?? $this->request->getHeaderLine('Accept-Language')
            ?? service('request')->getLocale();

        $translations = service('langService')->getTranslations($locale);

        return $this->respond([
            'status' => 'success',
            'data'   => $translations,
        ]);
    }
}

<?php

declare(strict_types=1);

namespace App\Services;

final readonly class ModuleService
{
    public function findAll(): array
    {
        $modules = [];

        $paths = glob(APPPATH . 'Modules/*/module.json');

        foreach ($paths as $path) {
            $content = file_get_contents($path);

            if ($content === false) {
                continue;
            }

            $manifest = json_decode($content, true);

            if (json_last_error() !== JSON_ERROR_NONE) {
                continue;
            }

            if (($manifest['status'] ?? 'inactive') === 'active') {
                $modules[] = $manifest;
            }
        }

        return $modules;
    }
}

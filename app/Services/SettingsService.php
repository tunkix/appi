<?php

declare(strict_types=1);

namespace App\Services;

use CodeIgniter\Settings\Settings;

final readonly class SettingsService
{
    public function __construct(
        private Settings $settings,
    ) {}

    public function findAll(): array
    {
        return $this->settings->all();
    }

    public function update(array $data): void
    {
        foreach ($data as $key => $value) {
            $this->settings->set($key, $value);
        }
    }
}

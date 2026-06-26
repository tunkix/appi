<?php

declare(strict_types=1);

namespace App\Services;

final readonly class LangService
{
    public function getTranslations(string $locale): array
    {
        $translations = [];

        $language = service('language');
        $language->setLocale($locale);

        $systemFiles = glob(APPPATH . 'Language/' . $locale . '/*.php');

        foreach ($systemFiles as $file) {
            $key = basename($file, '.php');
            $translations[$key] = $language->getLine($key);
        }

        $modulePaths = glob(APPPATH . 'Modules/*/Language/' . $locale . '/*.php');

        foreach ($modulePaths as $file) {
            preg_match('#Modules/([^/]+)/Language#', $file, $matches);
            $module = $matches[1] ?? basename(dirname($file, 3));
            $key    = $module . '.' . basename($file, '.php');
            $lines  = require $file;

            if (is_array($lines)) {
                $translations[$module] = $lines;
            }
        }

        return $translations;
    }
}

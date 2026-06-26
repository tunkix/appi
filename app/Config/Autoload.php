<?php

namespace Config;

use CodeIgniter\Config\AutoloadConfig;

class Autoload extends AutoloadConfig
{
    public $psr4 = [
        APP_NAMESPACE => APPPATH,
    ];

    public $classmap = [];

    public $files = [];

    public $helpers = ['auth', 'setting'];

    public function __construct()
    {
        parent::__construct();

        $modulesPath = APPPATH . 'Modules/';
        if (is_dir($modulesPath)) {
            $dirs = array_filter(glob($modulesPath . '*'), 'is_dir');
            foreach ($dirs as $dir) {
                $moduleName = basename($dir);
                $this->psr4['App\\Modules\\' . $moduleName] = $dir;
            }
        }
    }
}

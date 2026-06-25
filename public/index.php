<?php

// Path to the front controller (this file)
define('FCPATH', __DIR__ . DIRECTORY_SEPARATOR);

// Ensure the current directory is pointing to the front controller's location
chdir(FCPATH);

// Load our paths config file
require FCPATH . '../app/Config/Paths.php';

$paths = new Config\Paths();

// Load the framework bootstrap file
require $paths->systemDirectory . '/Boot.php';

exit(\CodeIgniter\Boot::bootWeb($paths));

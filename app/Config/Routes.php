<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */

// Health-check
$routes->get('/', 'Home::index');

// SPA fallback — serve index.html for all /admin/* routes (production)
$routes->get('admin', static function () {
    $path = FCPATH . 'index.html';
    return file_exists($path)
        ? service('response')->setContentType('text/html')->setBody(file_get_contents($path))
        : service('response')->setStatusCode(503)->setBody('SPA not built yet. Run: npm run build');
});
$routes->get('admin/(:any)', static function () {
    $path = FCPATH . 'index.html';
    return file_exists($path)
        ? service('response')->setContentType('text/html')->setBody(file_get_contents($path))
        : service('response')->setStatusCode(503)->setBody('SPA not built yet. Run: npm run build');
});

// API v1 — all routes protected by CORS + JWT
$routes->group('api', ['filter' => 'cors'], static function ($routes): void {

    // Auth routes (no JWT — these issue tokens)
    $routes->post('auth/login',   'Api\AuthController::login');
    $routes->post('auth/refresh', 'Api\AuthController::refresh');

    // Protected API routes
    $routes->group('', ['filter' => 'jwtAuth'], static function ($routes): void {

        // Session-related auth routes
        $routes->post('auth/logout', 'Api\AuthController::logout');
        $routes->get('auth/me',      'Api\AuthController::me');

        // Module manifest discovery
        $routes->get('modules', 'Api\ModuleController::index');

        // Settings
        $routes->get('settings',  'Api\SettingsController::index');
        $routes->put('settings',  'Api\SettingsController::update');

        // i18n
        $routes->get('lang', 'Api\LangController::index');

        // User management (admin only)
        $routes->group('users', ['filter' => 'group:admin,superadmin'], static function ($routes): void {
            $routes->get('/',       'Api\UserController::index');
            $routes->get('(:num)',  'Api\UserController::show/$1');
            $routes->post('/',      'Api\UserController::create');
            $routes->put('(:num)',  'Api\UserController::update/$1');
            $routes->delete('(:num)', 'Api\UserController::delete/$1');
        });
    });
});

<?php

declare(strict_types=1);

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->group('api/contacts', [
    'namespace' => 'App\Modules\Contacts\Controllers',
    'filter'    => 'jwtAuth',
], static function ($routes): void {
    $routes->get('/',          'ContactController::index');
    $routes->get('(:num)',     'ContactController::show/$1');
    $routes->post('/',         'ContactController::create');
    $routes->put('(:num)',     'ContactController::update/$1');
    $routes->delete('(:num)',  'ContactController::delete/$1');
});

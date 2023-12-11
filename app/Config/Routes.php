<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\Home;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->post('/', [Home::class, 'create']);
$routes->get('/del/(:segment)', [Home::class, 'delete']);
$routes->get('/(:segment)', [Home::class, 'show']);
?>
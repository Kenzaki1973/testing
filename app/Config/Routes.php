<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/product', 'ProductController::Kenzaki1973');
$routes->get('/product/(:any)', 'ProductController::product/$1');

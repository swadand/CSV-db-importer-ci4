<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->match(['get', 'post'], '/handlecsv', 'Csv::handlecsv');
$routes->get('/edit', 'Csv::edit');
$routes->get('/delete', 'Csv::delete');
$routes->post('/delete', 'Csv::delete');


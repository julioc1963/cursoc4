<?php

use CodeIgniter\Controller;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('webs', 'Home::web');

$routes->group('Dashboard',  function($routes) {
    $routes->presenter('movie', ['placeholder' => '(:num)', 'controller' => 'Dashboard\Movie'] );
});


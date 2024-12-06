<?php

use CodeIgniter\Controller;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
// rutas con nombre
$routes->get('webs', 'Home::webs', ['as'=> 'web']);


$routes->presenter('movie', ['placeholder' => '(:num)'] );

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
//rutas de login
$routes->get('login', '\App\Controllers\Web\Usuario::login', ['as' => 'usuario.login']);
$routes->post('login_post', '\App\Controllers\Web\Usuario::login_post', ['as' => 'usuario.login_post']);

$routes->get('register', '\App\Controllers\Web\Usuario::register', ['as' => 'usuario.register']);
$routes->post('register_post', '\App\Controllers\Web\Usuario::register_post', ['as' => 'usuario.register_post']);

$routes->get('logout', '\App\Controllers\Web\Usuario::logout', ['as' => 'usuario.logout']);
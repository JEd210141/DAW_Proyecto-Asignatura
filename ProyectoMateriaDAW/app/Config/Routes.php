<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'HomeController::index');
$routes->get('/login', 'LoginController::index');
$routes->post('/login', 'LoginController::auth');
$routes->get('/logout', 'LoginController::logout');
$routes->get('/register', 'RegisterController::index');
$routes->post('/register', 'RegisterController::register');
$routes->get('/dashboard', 'DashboardController::index');
$routes->get('/eventos', 'EventosController::index');
$routes->post('/eventos', 'EventosController::guardar');
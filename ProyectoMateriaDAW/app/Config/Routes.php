<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//Inicio
$routes->get('/', 'HomeController::index');
$routes->get('home', 'HomeController::index');

//Administrador
$routes->get('admin_login', 'HomeController::administrador');
$routes->get('admin/login', 'AdminController::login');
$routes->post('admin/login', 'AdminController::login');
$routes->get('admin/home', 'AdminController::regresar');
$routes->get('admin/cerrar_sesion', 'AdminController/cerrar_sesion');

//Empleado
$routes->get('employe_login', 'HomeController::empleado');
$routes->get('employe/login', 'EmployeController::login');
$routes->post('employee/login', 'EmployeController::login');
$routes->get('employe/home', 'EmployeController::regresar');
$routes->get('employe/cerrar_sesion', 'EmployeController/cerrar_sesion');


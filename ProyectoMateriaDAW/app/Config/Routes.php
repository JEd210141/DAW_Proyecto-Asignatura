<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//Inicio
$routes->get('/', 'AuthController::index');
$routes->get('home', 'AuthController::index');
$routes->get('admin', 'AdminController::dashboard_administrador');

$routes->get('admin/login', 'AuthController::login');
$routes->post('admin/login', 'AuthController::login');
$routes->get('admin/register', 'AuthController::register');
$routes->post('admin/register', 'AuthController::register');
$routes->get('empleados/login', 'AuthController::empleado');
$routes->post('empleados/login', 'AuthController::empleado');

$routes->get('dashboard_administrador', 'AdminController::dashboard_administrador');
$routes->get('dashboard_empleado', 'AuthController::empleado');

$routes->get('admin/empleados_listas', 'AdminController::empleados_listas');
$routes->get('admin/clientes_list', 'AdminController::clientes_lista');
$routes->get('admin/perfil_admin', 'AdminController::perfil');

$routes->get('admin/cerrar_sesion', 'AdminController::cerrar_sesion');

// Rutas para Empleados
$routes->get('admin/empleados_list', 'AdminController::empleadosList');
$routes->get('admin/nuevo_empleado', 'AdminController::agregarEmpleado');
$routes->add('/empleados/nuevo', 'AdminController::agregarEmpleado', ['as' => 'empleado_nuevo']);
$routes->get('admin/editar_empleado', 'AdminController::editarEmpleado');
$routes->get('admin/editar_empleado', 'AdminController::editarEmpleado');
$routes->get('admin/editar_empleado/(:num)', 'AdminController::editarEmpleado/$1');
$routes->post('admin/editar_empleado/(:num)', 'AdminController::editarEmpleado/$1');
$routes->get('admin/borrar_empleado/(:num)', 'AdminController::borrarEmpleado/$1');
$routes->get('admin/confirmar_borrar_empleado/(:num)', 'AdminController::confirmarBorrarEmpleado/$1');

// Rutas para Clientes
$routes->get('admin/clientes_list', 'AdminController::clientesList');
$routes->get('admin/nuevo_cliente', 'AdminController::nuevoCliente');
$routes->get('admin/editar_cliente/(:num)', 'AdminController::editarCliente/$1');
$routes->get('admin/borrar_cliente/(:num)', 'AdminController::borrarCliente/$1');
$routes->get('admin/confirmar_borrar_cliente/(:num)', 'AdminController::confirmarBorrarCliente/$1');

$routes->group('empleado', ['namespace' => 'App\Controllers'], function ($routes) {
    // Rutas para clientes
    $routes->get('clientes_list', 'EmpleadoController::clientesList');
    $routes->get('nuevo_cliente', 'EmpleadoController::nuevoCliente');
    $routes->post('insertar_cliente', 'EmpleadoController::insertarCliente');
    $routes->get('editar_cliente/(:num)', 'EmpleadoController::editarCliente/$1');
    $routes->post('actualizar_cliente/(:num)', 'EmpleadoController::actualizarCliente/$1');
    $routes->get('borrar_cliente/(:num)', 'EmpleadoController::borrarCliente/$1');
});
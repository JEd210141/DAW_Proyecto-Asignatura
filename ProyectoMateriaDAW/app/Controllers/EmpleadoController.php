<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ClienteModel;

class EmpleadoController extends BaseController
{
    public function index()
    {
        return view("dashboard_empleado");
    }

    public function login()
    {
        return view('empleados/login');
    }

    public function regresar()
    {
        // Redirige a la vista home.php
        return redirect()->to('home');
    }

    public function dashboard_empleado()
    {
        // Aquí deberías obtener los datos reales de las órdenes desde tu modelo de órdenes
        $ordenes = [
            ['id' => 1, 'cliente' => 'Cliente 1', 'fecha_entrega' => '2023-12-01', 'estado' => 'En Proceso'],
            ['id' => 2, 'cliente' => 'Cliente 2', 'fecha_entrega' => '2023-12-05', 'estado' => 'Entregado'],
            // Agrega más órdenes según sea necesario
        ];

        // Pasa los datos de las órdenes a la vista
        $data['ordenes'] = $ordenes;

        return view('dashboard_empleado', $data);
    }

    public function clientesList()
    {
        $clienteModel = new ClienteModel();
        $data['clientes'] = $clienteModel->findAll();

        return view('empleado/clientes_list', $data);
    }

    public function nuevoCliente()
    {
        return view('empleado/nuevo_cliente');
    }

    public function insertarCliente()
    {
        // Lógica para insertar un nuevo cliente

        return redirect()->to('empleado/clientes_list');
    }

    public function editarCliente($id)
    {
        // Lógica para obtener y mostrar los datos del cliente a editar

        return view('empleado/editar_cliente');
    }

    public function actualizarCliente($id)
    {
        // Lógica para actualizar los datos del cliente

        return redirect()->to('empleado/clientes_list');
    }

    public function borrarCliente($id)
    {
        // Lógica para borrar un cliente

        return redirect()->to('empleado/clientes_list');
    }
    
    public function cerrar_sesion()
    {
    // Obtén una instancia del servicio de sesión
    $session = session();

    // Destruye la sesión actual
    $session->destroy();

        // Redirigir a la página de inicio o página de inicio de sesión
        return redirect()->to('home');
    }
}

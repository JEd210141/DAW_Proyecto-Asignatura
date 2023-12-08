<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AdminModel;
use App\Models\EmpleadoModel;
use App\Models\ClienteModel;

class AdminController extends BaseController
{
    public function empleados_listas()
    {
        // Cargar el modelo de empleados
        $empleadoModel = new EmpleadoModel();

        // Obtén los datos de los empleados desde la base de datos
        $data['empleados'] = $empleadoModel->findAll();

        // Cargar la vista con los datos
        return view('empleados_listas', $data);
    }

    public function dashboard_administrador()
    {
        // Cargar el modelo de empleados
        $empleadoModel = new EmpleadoModel();
    
        // Obtener los datos de los empleados desde la base de datos
        $data['empleados'] = $empleadoModel->findAll();
    
        // Cargar la vista del dashboard del administrador con los datos
        return view('dashboard_administrador', $data);
    }

    public function empleados()
    {
        return view('admin/empleados_listas');
    }

    public function clientes_lista()
    {
        $clienteModel = new ClienteModel();
        $data['clientes'] = $clienteModel->findAll();  // Esto obtendrá todos los clientes de la base de datos
    
        return view('admin/clientes_list', $data);
    }

    public function nuevoCliente()
    {
        // Lógica para la creación de un nuevo cliente

        return redirect()->to('admin/clientes_list');
    }

    public function editarCliente($id)
    {
        // Lógica para editar el cliente con el ID proporcionado

        return redirect()->to('admin/clientes_list');
    }

    public function borrarCliente($id)
    {
        // Lógica para borrar el cliente con el ID proporcionado

        return redirect()->to('admin/clientes_list');
    }
    
    public function empleadosList()
    {
        // Lógica para obtener la lista de empleados desde la base de datos
        // ...

        // Carga la vista de lista de empleados
        return view('admin/empleados_list'); // Ajusta la vista y los datos según tu aplicación
    }

    public function nuevoEmpleado()
    {
        // Lógica para agregar un nuevo empleado
        // ...

        // Redirige a la lista de empleados después de agregar
        return redirect()->to('/admin/empleados_listas');
    }

    public function editarEmpleado()
    {
        // Lógica para obtener y editar un empleado por ID
        // ...

        // Carga la vista para editar el empleado
        return view('admin/editar_empleado'); // Ajusta la vista y los datos según tu aplicación
    }

    public function borrarEmpleado($id)
    {
        // Lógica para obtener y borrar un empleado por ID
        // ...

        // Redirige a la lista de empleados después de borrar
        return redirect()->to('/admin/empleados_listas');
    }

    public function confirmarBorrarEmpleado($id)
    {
        // Lógica para mostrar la confirmación de borrado de un empleado
        // ...

        // Carga la vista de confirmación de borrado
        return view('admin/confirmar_borrar_empleado'); // Ajusta la vista y los datos según tu aplicación
    }

    public function perfil()
    {
        $AdminModel = new AdminModel();
        // Lógica para obtener los datos del perfil del administrador
        $data['perfil'] = $AdminModel->findAll(); // Ajusta según tu lógica de recuperación de datos de perfil

        // Cargar la vista de perfil
        return view('admin/perfil_admin', $data);
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

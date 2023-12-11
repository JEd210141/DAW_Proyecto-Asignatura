<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AdminModel;
use App\Models\EmpleadoModel;
use App\Models\ClienteModel;

class AdminController extends BaseController
{
    public function dashboard_administrador()
    {
        // Cargar el modelo de empleados
        $empleadoModel = new EmpleadoModel();
    
        // Obtener los datos de los empleados desde la base de datos
        $empleados = $empleadoModel->findAll();
    
        // Cargar el modelo de clientes
        $clienteModel = new ClienteModel();
    
        // Obtener los datos de los clientes desde la base de datos
        $clientes = $clienteModel->findAll();
    
        // Cargar la vista del dashboard del administrador con los datos
        return view('dashboard_administrador', compact('empleados', 'clientes'));
    }

    public function empleados_listas()
    {
        // Cargar el modelo de empleados
        $empleadoModel = new EmpleadoModel();

        // Obtén los datos de los empleados desde la base de datos
        $data['empleados'] = $empleadoModel->findAll();

        // Cargar la vista con los datos
        return view('admin/empleados_listas', $data);
    }

    public function agregarEmpleado()
    {
        // Redirect to the admin/nuevo_empleado view if not POST request
        if ($this->request->getMethod() !== 'post') {
            return redirect('admin/nuevo_empleado');
        }
    
        // Create employee instance
        $empleado = new EmpleadoModel();
    
        // Get form data
        $datos = $this->request->getPost();
    
        // Hash password
        $newPassword = password_hash($datos['password'], PASSWORD_DEFAULT);
    
        // Set employee data
        $empleado->username = $datos['username'];
        $empleado->password = $newPassword;
        $empleado->nombre = $datos['nombre'];
        $empleado->departamento = $datos['departamento'];
        $empleado->correo = $datos['correo'];
        $empleado->status = $datos['status'];
    
        // Save the employee
        $empleado->save();
    
        // Set flash message
        session()->setFlashdata('mensaje', 'Empleado agregado correctamente.');
    
        // Redirect to empleados_lista view
        return redirect('/admin/empleados_lista');
    }

    public function editarEmpleado($id)
    {
        // Obtiene el empleado por ID
        $empleadoModel = new EmpleadoModel();
        $empleado = $empleadoModel->find($id);
    
        // Verifica si se ha enviado un formulario
        if ($this->request->getMethod() === 'post') {
            // Obtén los datos del formulario
            $datos = $this->request->getPost();

            $newPassword = password_hash($datos['password'], PASSWORD_DEFAULT);
    
            // Actualiza los atributos del modelo con los nuevos datos
            $empleado['username'] = $datos['username'];
            $empleado['password'] = $newPassword;
            $empleado['nombre'] = $datos['nombre'];
            $empleado['departamento'] = $datos['departamento'];
            $empleado['correo'] = $datos['correo'];
            $empleado['status'] = $datos['status'];

            // ... asigna los demás campos según sea necesario
    
            // Guarda los cambios en la base de datos
            $empleadoModel->update($id, $empleado);
    
            // Redirige a la vista de lista de empleados
            return redirect()->to('admin/empleados_listas');
        }
    
        // Pasa el empleado a la vista de edición
        return view('admin/editar_empleado', ['empleado' => $empleado]);
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
        // Obtiene los datos del cliente
        $clienteModel = new ClienteModel();
        $cliente = $clienteModel->find($id);
    
        // Asigna la variable $cliente a la variable $data
        $data['cliente'] = $cliente;
    
        // Muestra la vista de edición
        $this->view->set($data);
        $this->view->render('empleado/editar_cliente');
    
        // Si el formulario se envía correctamente
        if ($this->request->isPost()) {
            // Obtiene los datos del formulario
            $datos = $this->request->getPost();
    
            // Actualiza los datos del cliente en la base de datos
            $cliente->nombre = $datos['nombre'];
            $cliente->apellido = $datos['apellido'];
            $cliente->correo = $datos['correo'];
            $cliente->peso = $datos['peso'];
            $cliente->save();
    
            // Redirige a la lista de clientes
            return redirect('/empleado/clientes_list');
        }
    }    

    public function borrarCliente($id)
    {
        // Lógica para borrar el cliente con el ID proporcionado

        return redirect()->to('admin/clientes_list');
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

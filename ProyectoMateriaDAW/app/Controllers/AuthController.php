<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Controllers\BaseController;

class AuthController extends BaseController
{
    protected $db;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
    }

    public function index()
    {
        return view("home");
    }

    public function login()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
    
        // Validar que se proporcionaron los datos de usuario y contraseña
        if (empty($username) || empty($password)) {
            return view('admin/login', ['error' => 'Por favor, ingrese tanto el nombre de usuario como la contraseña.']);
        }
    
        // Verificar las credenciales en la base de datos
        $query = $this->db->table('users') // Ajusta la tabla según tu esquema de base de datos
                          ->where('username', $username)
                          ->get();
    
        $usuario = $query->getRow();
    
        if ($usuario && password_verify($password, $usuario->password)) {
            // El usuario está autenticado
            // Cargar la vista del dashboard del administrador
            return view('dashboard_administrador');
        } else {
            // El usuario no está autenticado
            return view('admin/login', ['error' => 'Usuario o contraseña incorrectos']);
        }
    }    

    public function register()
    {
        if ($this->request->getMethod() === 'post') {
            // Captura los datos del formulario
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');
    
            // Validaciones (puedes agregar más según tus necesidades)
            if (empty($username) || empty($password)) {
                return view('/admin/register', ['error' => 'Por favor, complete todos los campos.']);
            }
    
            // Hashear la contraseña
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    
            // Insertar datos en la tabla de usuarios
            $data = [
                'username' => $username,
                'password' => $hashedPassword,
            ];
    
            $this->db->table('users')->insert($data);
    
            // Puedes redirigir a la página de inicio de sesión u otra vista
            return redirect()->to('/admin/login');
        }
    
        return view('admin/register');
    }

    public function empleado()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
    
        try {
            // Validar que se proporcionaron los datos de usuario y contraseña
            if (empty($username) || empty($password)) {
                throw new \RuntimeException('Por favor, ingrese tanto el nombre de usuario como la contraseña.');
            }
    
            // Verificar las credenciales en la base de datos
            $query = $this->db->table('empleados')
                ->select('id, username, password') // Seleccionar id, username y password
                ->where('username', $username)
                ->get();
    
            $empleado = $query->getRow();
    
            if (!$empleado || !password_verify($password, $empleado->password)) {
                // Las credenciales son incorrectas
                throw new \RuntimeException('Usuario o contraseña incorrectos.');
            }
    
            // Las credenciales son correctas, autenticar al empleado
            // Puedes realizar acciones adicionales aquí, como establecer sesiones
    
            // Redirigir al dashboard del empleado
            return redirect()->to('dashboard_empleado');
        } catch (\Exception $e) {
            // Manejar cualquier excepción y redirigir a la vista de login con el mensaje de error
            return view('empleado/login', ['error' => $e->getMessage()]);
        }
    }
    
    


    // Otros métodos para cerrar sesión, restablecer contraseña, etc.
}

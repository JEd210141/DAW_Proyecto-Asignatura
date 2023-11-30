<?php

namespace App\Controllers;
use CodeIgniter\View\View;

class HomeController extends BaseController
{
    public function index()
    {
        return view('/home');
    }

    public function login()
    {
        // Redirige al formulario de inicio de sesión
        return redirect()->to('/login');
    }

    public function register()
    {
        // Redirige al formulario de registro
        return redirect()->to('/register');
    }

    public function cancel()
    {
        // Agrega lógica de cancelación si es necesario
        // Puedes redirigir a la página principal o realizar otra acción
        return redirect()->to('/welcome_message');
    }
    
}

<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AdminController extends BaseController
{
    public function index()
    {
        return view("home/admin_login");
    }

    public function login()
    {
        return view('dashboard_administrador');
    }

    public function regresar()
    {
        // Redirige a la vista home.php
        return redirect()->to('home');
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

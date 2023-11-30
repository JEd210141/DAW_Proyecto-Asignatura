<?php

namespace App\Controllers;

use App\Models\UserModel;

class LoginController extends BaseController
{
    private $UserModel;
    

    public function __construct()
    {
        $this->UserModel = new UserModel();
    }

    public function index()
    {
        return view('login');
    }

    public function login()
    {
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $userModel = new \App\Models\UserModel();
        $user = $userModel->get_user($email, $password);

        if ($user) {
            // Iniciar sesión y redirigir al panel de control
            return redirect()->to('/welcome');
        } else {
            // Mostrar mensaje de error de inicio de sesión
            $data['error'] = 'Credenciales inválidas';
            return view('login', $data);
        }
    }
}

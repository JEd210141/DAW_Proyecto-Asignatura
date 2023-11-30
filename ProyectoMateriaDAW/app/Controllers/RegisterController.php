<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class RegisterController extends BaseController
{
    public function index()
    {
        return view('register');
    }

    public function register()
    {
        // Valida los datos del formulario
        $validation = $this->validate([
            'name' => 'required',
            'email' => 'required|valid_email|is_unique[users.email]',
            'password' => 'required|min_length[8]',
        ]);

        // Verifica si los datos son válidos
        if (!$validation) {
            return view('register', ['validation' => $this->validator]);
        }

        // Registra al usuario en la base de datos
        $userModel = new UserModel();
        $userModel->save([
            'name' => $this->request->getVar('name'),
            'email' => $this->request->getVar('email'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
        ]);

        // Redirige al usuario a la página de inicio de sesión
        return redirect()->to('/welcome');
    }
}

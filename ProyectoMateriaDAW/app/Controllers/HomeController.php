<?php

namespace App\Controllers;
use CodeIgniter\View\View;

class Home extends BaseController
{
    public function index()
    {
        $view = new View();

        $view->setTemplate('main');

        $view->data['titulo'] = 'Bienvenido al sistema';

        $view->data['acciones'] = [
            [
                'texto' => 'Iniciar sesión',
                'enlace' => route('login', 'login'),
                'clase' => 'btn btn-primary'
            ],
            [
                'texto' => 'Registrarse',
                'enlace' => route('register', 'register'),
                'clase' => 'btn btn-primary'
            ],
            [
                'texto' => 'Cancelar',
                'enlace' => route('welcome', 'welcome'),
                'clase' => 'btn btn-primary'
            ]
        ];

        $view->render('home');
    }
    
}

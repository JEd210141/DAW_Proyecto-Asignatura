<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class DashboardController extends BaseController
{
    public function index()
    {
        // Obtiene el usuario actual
        $user = $this->session->get('user');

        // Renderiza la vista dashboard
        $this->view->setTemplate('main');
        $this->view->data['titulo'] = 'Dashboard';
        $this->view->data['usuario'] = $user;
        $this->view->render('dashboard');
    }
}

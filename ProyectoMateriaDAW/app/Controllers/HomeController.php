<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class HomeController extends BaseController
{
    public function index()
    {
        return view("home");
    }

    public function administrador()
    {
        return view('admin_login');
    }

    public function empleado()
    {
        return view('employe_login');
    }


}

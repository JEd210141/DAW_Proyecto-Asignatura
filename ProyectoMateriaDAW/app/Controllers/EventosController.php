<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class EventosController extends BaseController
{
    public function index()
    {
        // Obtiene los eventos de la base de datos
        $eventos = $this->db->table('eventos')->get();

        // Pasa los eventos a la vista
        $this->view->setVar('eventos', $eventos);

        // Renderiza la vista calendario
        $this->view->render('calendario');
    }

    public function guardar()
    {
        // Obtiene los datos del formulario
        $titulo = $this->request->getPost('titulo');
        $fecha = $this->request->getPost('fecha');
        $hora = $this->request->getPost('hora');
        $descripcion = $this->request->getPost('descripcion');

        // Crea un nuevo evento
        $evento = [
            'titulo' => $titulo,
            'fecha' => $fecha,
            'hora' => $hora,
            'descripcion' => $descripcion
        ];

        // Guarda el evento en la base de datos
        $this->db->table('eventos')->insert($evento);

        // Redirecciona al calendario
        $this->response->redirect('/eventos');
    }
}

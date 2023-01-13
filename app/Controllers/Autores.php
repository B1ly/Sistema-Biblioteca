<?php

namespace App\Controllers;

use App\Models\AutoresModel;

class Autores extends BaseController
{
    public function index()
    {
        $model = new AutoresModel();
        $datos = $model->getAutores();

        echo view('/layout/header');
        echo view('/autores/listado',compact('datos'));
        echo view('/layout/footer');

    }
    public function add()
    {
        
    }
}
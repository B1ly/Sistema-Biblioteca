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
        
        echo view('/layout/header');
        echo view('/autores/add');
        echo view('/layout/footer');
    }

    public function store()
    {
       $validacion= $this->validate(['nombre' => 'required',           'apellido' => 'required',
        'pais' => 'required', 
        'fechaR' => 'required']);

        if($_POST && $validacion){

            $datos = [
                'nombre' => $_POST['nombre'],
                'apellido' => $_POST['apellido'],
                'pais' => $_POST['pais'],
                'fechaR' => $_POST['fechaR']
            ];
            $model = new AutoresModel();
            $model->add($datos);
            var_dump($_POST);

            session()->setFlashdata('mensaje','Registro guardado exitosamente' );

            return redirect()->to(base_url('/autores'));


        }else{

            $error = $this->validator->listErrors();


            session()->setFlashdata('mensaje', $error );
            return redirect()->to(base_url('/add'));
        
        }

    }

    public function edit($id) 
    {
        
        echo view('/layout/header');
        echo view('/autores/edit');
        echo view('/layout/footer');
    }
}
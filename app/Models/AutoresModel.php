<?php

namespace App\Models;

use CodeIgniter\Model;

class AutoresModel extends Model 
{
    protected $table      = 'autores';
    protected $allowedFields = ['nombre', 'apellido','pais','fechaR','catidadL'];

    public function getAutores()
    {
        return $this->findAll();
    }

    public function add($dato)
    {
        return $this->save($dato);
    }
}
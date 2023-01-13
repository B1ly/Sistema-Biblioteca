<?php

namespace App\Controllers;
use App\Models\AutoresModel;

class Home extends BaseController
{
    public function index()
    {
        echo view('/layout/header');
        echo view('index');
        echo view('/layout/footer');
    }
}
 
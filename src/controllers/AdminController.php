<?php

declare(strict_types=1);

namespace Empresa\App\Controllers;

use Empresa\App\Core\Controller;
use Empresa\App\Models\Auto;
use Exception;

class AdminController extends Controller
{
    public function index()
    {
        echo 'Welcome to the Home Page!';
    }
    public function nuevo()
    {
        $mensaje= "hola";
        $this->render('autos/mensaje', ["mensaje" => $mensaje]);

    }
   
    
}

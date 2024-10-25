<?php

declare(strict_types=1);

namespace Controllers;

use Core\Controller;
use Exception;
use Models\Auto;

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

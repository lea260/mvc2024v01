<?php

declare(strict_types=1);

namespace Empresa\App\Controllers;

use Empresa\App\Core\Controller;
use Empresa\App\Models\Auto;

class LoginController extends Controller
{
    public function index()
    {
        echo 'Welcome to the Home Page!';
    }
    public function ingresar()
    {
        //var_dump($_GET);
        //formulario de autos
        //$this->render('autos/nuevo');
        echo "login";
    }
}

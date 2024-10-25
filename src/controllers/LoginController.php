<?php

declare(strict_types=1);

namespace Controllers;

use Core\Controller;
use Models\Auto;
use Models\Usuario;

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
        $this->render('login/ingresar');
    }
    public function entrar()
    {
        try {
            $usuario = $_POST['usuario'];
            $pass = $_POST['password'];
            $exito = Usuario::ingresar($usuario, $pass);
            $mensaje = "credenciales invalidas";
            if ($exito) {
                $mensaje = "login correcto";
            }
            $this->render('autos/mensaje', ["mensaje" => $mensaje]);
        } catch (\Throwable $th) {
            //throw $th;
            $this->render('index/index');
        }
    }
    public function salir()
    {
        try {
            session_unset();
            session_destroy();
            $mensaje = "fin de session";
            $this->render('autos/mensaje', ["mensaje" => $mensaje]);
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}

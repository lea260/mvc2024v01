<?php

declare(strict_types=1);

namespace Models;


use Core\Conexion;
use PDO;
use PDOException;
use stdClass;

// Incluir la clase Conexion

class Usuario
{
    // Constructor de promoción de propiedades
    public function __construct(
        public string $marca,
        public string $modelo,
        public string $fechaCompra,
        public ?int $id = null,
    ) {
    }

    // Método para insertar un nuevo auto en la base de datos



    public static function ingresar($usuario, $password): bool
    {
        //DTO data Transfer Object
        $res = false;

        try {
            //code...
            // if (password_verify($paswPost,$pwdBD)
            if ($usuario == 'leandro' && $password == "1234") {
                $res = true;
                $_SESSION['rol'] = "usuario";
                $_SESSION['usuario'] = $usuario;
                $_SESSION['id'] = 26;
                $_SESSION['estaLog'] = true;
            }
            if ($usuario == 'diego' && $password == "1111") {
                $res = true;
                $_SESSION['rol'] = "admin";
                $_SESSION['usuario'] = $usuario;
                $_SESSION['id'] = 3;
                $_SESSION['estaLog'] = true;
            }
            return $res;
        } catch (\Throwable $th) {
            //throw $th;
            return $res;
        }
    }
}

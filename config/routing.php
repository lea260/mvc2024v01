<?php
// Default route when no specific path is provided or just the base URL
echo __DIR__ . '/../vendor/autoload.php';
//cargo vendor bien
require_once __DIR__ . '/../vendor/autoload.php';
//require_once __DIR__ . '/../dep.php';
//require_once __DIR__ . '/../vendor/autoload.php';

use Core\Router;

$router = new Router();
//pagina principal
$router->add('home', ['controller' => 'Index', 'action' => 'index']);
//$router->add('articulo/listar', ['controller' => 'Articulo', 'action' => 'listar']);
//http: //localhost/mvccomposer/index.php/auto/nuevo
//autos
$router->add('autos/nuevo', ['controller' => 'Auto', 'action' => 'nuevo']);
$router->add('autos/crear', ['controller' => 'Auto', 'action' => 'crear']);
$router->add('autos/listar', ['controller' => 'Auto', 'action' => 'listar']);
$router->add('autos/editar', ['controller' => 'Auto', 'action' => 'editar']);
$router->add('autos/modificar', ['controller' => 'Auto', 'action' => 'modificar']);
$router->add('autos/borrar', ['controller' => 'Auto', 'action' => 'borrar']);
//login
$router->add('login/ingresar', ['controller' => 'Login', 'action' => 'ingresar']);
$router->add('login/entrar', ['controller' => 'Login', 'action' => 'entrar']);
$router->add('login/salir', ['controller' => 'Login', 'action' => 'salir']);
//mail
$router->add('mail/enviar', ['controller' => 'Mail', 'action' => 'enviar']);
//
$router->add('admin/panelAdmin', ['controller' => 'Admin', 'action' => 'panelAdmin']);

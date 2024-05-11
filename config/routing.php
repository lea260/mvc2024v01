<?php
// Default route when no specific path is provided or just the base URL
$router->add(
    '',
    ['controller' => 'Index', 'action' => 'index']
);
$router->add('index.php', ['controller' => 'Index', 'action' => 'index']);
$router->add('articulo/listar', ['controller' => 'Articulo', 'action' => 'listar']);
//http: //localhost/mvccomposer/index.php/auto/nuevo
$router->add('index.php/auto/nuevo', ['controller' => 'Auto', 'action' => 'nuevo']);

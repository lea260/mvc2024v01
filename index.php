<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/config/secrets.php';
require_once __DIR__ . '/config/routing.php';
session_start();
// $url = $_SERVER['REQUEST_URI'];
$url = $_GET['r'] ?? "home";
$router->dispatch($url);

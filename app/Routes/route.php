<?php
// $pdo = require_once __DIR__ . '/../../Connection.php';
require 'vendor/autoload.php';
require 'app/Core/core.php';
require 'app/Controllers/CursosController.php';
$pdo = require 'Connection.php';

use Dotenv\Dotenv;
$dotenv = Dotenv::createImmutable(__DIR__ . '/../../');
// $dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

handleCors();

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$cursosController = new CursosController($pdo);  

if($path === '/listarCursos' || preg_match('/^\/listarCursos\/(\d+)$/', $path, $matches)) {
    $id = isset($matches[1]) ? $matches[1] : null; 
    // $cursosController = new App\Controllers\CursosController($pdo);;  
    $resultado = $cursosController->listarCursos($id);  
    echo json_encode($resultado); 
    // exit;
}
// if($path == '/listarCursos') {
//     $cursosController = new CursosController($pdo);
//     $resultado = $cursosController->listarCursos();
//     echo json_decode($resultado);
// }
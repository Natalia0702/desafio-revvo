<?php
require 'vendor/autoload.php';
require 'app/Core/core.php';
require 'app/Controllers/CursosController.php';
$pdo = require 'Connection.php';

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__ . '/../../');
$dotenv->load();

// handleCors();

$path = $_SERVER['REQUEST_URI'];
$cursosController = new CursosController($pdo);

if($path === '/listarCursos' || preg_match('/^\/listarCursos\/(\d+)$/', $path, $matches)) {
    $id = isset($matches[1]) ? $matches[1] : null; 
    $resultado = $cursosController->listarCursos($id);  
    echo json_encode($resultado);
}
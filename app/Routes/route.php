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
$method = $_SERVER['REQUEST_METHOD'];
$cursosController = new CursosController($pdo);

if($path === '/listarCursos' || preg_match('/^\/listarCursos\/(\d+)$/', $path, $matches)) {
    $id = isset($matches[1]) ? $matches[1] : null; 
    $resultado = $cursosController->listarCursos($id);  
    echo json_encode($resultado);
    exit();
}

if ($path === '/criarCurso' && $method === 'POST') {
    $dados = json_decode(file_get_contents('php://input'), true); // Recebe os dados enviados via POST.
    $resultado = $cursosController->criarCurso($dados);
    echo json_encode(['message' => 'Curso criado com sucesso', 'curso' => $resultado]);
    exit();
}

if ($method === 'POST' && preg_match('/^\/editarCurso\/(\d+)$/', $path, $matches)) {
    $id = $matches[1];
    $dados = $_POST; 
    $resultado = $cursosController->editarCurso($id, $dados);
    echo json_encode(['message' => 'Curso atualizado com sucesso', 'curso' => $resultado]);
    exit();
}

if (preg_match('/^\/deletarCurso\/(\d+)$/', $path, $matches) && $method === 'DELETE') {
    $id = $matches[1];
    $resultado = $cursosController->deletarCurso($id);
    echo json_encode(['message' => 'Curso deletado com sucesso']);
    exit();
}

http_response_code(404);
echo json_encode(['message' => 'Rota não encontrada']);
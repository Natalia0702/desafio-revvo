<?php
// namespace App\Controllers;
require_once 'app/Models/CursosModel.php';
class CursosController {
    private $pdo;
    private $cursosModel;

    public function __construct($pdo){
        $this->pdo = $pdo;
        $this->cursosModel = new CursosModel($this->pdo);;
    }

    public function listarCursos($id) {
        $cursos = $this->cursosModel->listarCursos();
        return $cursos;
    }

}
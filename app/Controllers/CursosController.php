<?php
require_once 'app/Models/CursosModel.php';
class CursosController {
    private $pdo;
    protected $cursosModel;
    public function __construct($pdo) {
        $this->pdo = $pdo;
        $this->cursosModel = new CursosModel($this->pdo);
    }

    public function listarCursos($id) {
        $cursos = $this->cursosModel->listarCursos($id);
        return $cursos;
    }
}
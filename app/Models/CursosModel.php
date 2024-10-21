<?php
// namespace App\Models;
require_once 'Connection.php';
class CursosModel {
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function listarCursos($id){
        if($id === null){
            $stmt = $this->pdo->query('SELECT * FROM cursos');
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } else {
            $stmt = $this->pdo->prepare('SELECT * FROM cursos WHERE id = :id');
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
    }
}
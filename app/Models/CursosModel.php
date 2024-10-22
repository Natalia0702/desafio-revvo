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

    public function criarCurso($dados) {
        $stmt = $this->pdo->prepare('INSERT INTO cursos (nome_curso, descricao, preco, imagem) VALUES (:nome_curso, :descricao, :preco, :imagem)');
        $stmt->bindParam(':nome_curso', $dados['nome_curso']);
        $stmt->bindParam(':descricao', $dados['descricao']);
        $stmt->bindParam(':preco', $dados['preco']);
        $stmt->bindParam(':imagem', $dados['imagem']);
        return $stmt->execute();
    }

    public function editarCurso($id, $dados) {
        // var_dump($dados);die;
        $stmt = $this->pdo->prepare('UPDATE cursos SET nome_curso = :nome_curso, descricao = :descricao, preco = :preco WHERE id = :id');
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->bindParam(':nome_curso', $dados['nome_curso']);
        $stmt->bindParam(':descricao', $dados['descricao']);
        $stmt->bindParam(':preco', $dados['preco']);
        // $stmt->bindParam(':imagem', $dados['imagem']);
        return $stmt->execute();
    }

    public function deletarCurso($id) {
        $stmt = $this->pdo->prepare('DELETE FROM cursos WHERE id = :id');
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        return $stmt->execute();
    }
}

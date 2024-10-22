<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Cursos</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Lista de Cursos</h1>
        <div id="cursos-container" class="row">
            <!-- cursos-->
        </div>
        <div id="cursos-adicao" class="row">
            <!-- adição cursos-->
        </div>
    </div>

    <!-- Modal Ver Mais / Editar -->
    <div class="modal fade" id="verCursoModal" tabindex="-1" role="dialog" aria-labelledby="verCursoModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="verCursoModalLabel">Detalhes do Curso</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Modo Visualizar -->
                    <div id="visualizacaoCurso">
                        <p><strong></strong><br> <img id="ver-imagem" src="" alt="Imagem do Curso" style="max-width: 100%; height: auto;"></p>
                        <p><strong></strong> <span id="curso-id" data-id=""></span></p>
                        <p><strong>Título:</strong> <span id="ver-titulo"></span></p>
                        <p><strong>Descrição:</strong> <span id="ver-descricao"></span></p>
                        <p><strong>Investimento:</strong> <span id="ver-preco"></span></p>
                    </div>

                    <!-- Modo Editar -->
                    <form id="editarCursoForm" style="display: none;">
                        <input type="hidden" id="curso-id-hidden" name="curso_id">
                        <div class="form-group">
                            <label for="titulo">Título</label>
                            <input type="text" class="form-control" id="titulo" name="nome_curso" required>
                        </div>
                        <div class="form-group">
                            <label for="descricao">Descrição</label>
                            <textarea class="form-control" id="descricao" name="descricao" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="preco">Investimento</label>
                            <input type="text" class="form-control" id="preco" name="preco" required>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <button type="button" class="btn btn-warning" id="editar-curso">Editar</button>
                    <button type="button" class="btn btn-danger" id="deleteCurso">Deletar</button>
                    <button type="submit" class="btn btn-primary" id="salvarCurso" style="display: none;">Salvar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- Bootstrap JS CDN -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Script personalizado -->
    <script src="js/index.js"></script>
</body>
</html>

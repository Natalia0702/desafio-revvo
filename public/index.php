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

    <!--navbar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Desafio-Revvo</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            </ul>
            <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
            </form>
        </div>
        </nav>
    <!--navbar-->

    <!--corousel-->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active" style="height: 300px; object-fit: cover;" >
        <img class="d-block w-100" src="imagens/banner.png" alt="First slide">
        </div>
        <div class="carousel-item" style="height: 300px; object-fit: cover;">
        <img class="d-block w-100" src="imagens/banner.png" alt="Second slide">
        </div>
        <div class="carousel-item" style="height: 300px; object-fit: cover;">
        <img class="d-block w-100" src="imagens/banner.png" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    </div>
    <!--corousel-->
    <div class="container mt-5">
        <h2 class="text-end">MEUS CURSOS</h2>
        <hr>
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

    <div class="container">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <div class="col-md-4 d-flex align-items-center">
                <span class="mb-3 mb-md-0 text-body-secondary">© 2024 Company, Inc</span>
            </div>
        </footer>
    </div>

    <!--modal inicial-->
    <div id="modalInicial" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modalInicialLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalInicialLabel">Bem-vindo!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="imagens/banner.png" alt="Bem-vindo à plataforma" class="img-fluid mb-3" style="max-width: 100%; height: auto;"> 
                    <p>Seja bem-vindo à nossa plataforma. Aproveite para explorar os cursos disponíveis!</p>
                </div>
            </div>
        </div>
    </div>
    <!--modal inicial-->
  

    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- Bootstrap JS CDN -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Script personalizado -->
    <script src="js/index.js"></script>
</body>
</html>

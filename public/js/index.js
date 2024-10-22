$(document).ready(function(){
    // Carregar cursos
    carregarCursos();

    function carregarCursos() {
        $.ajax({
            url: 'http://localhost:8080/listarCursos',
            type: 'GET',
            success: function(response) {
                const cursos = JSON.parse(response);
                let cursosHtml = '';
                let adicaoCurso = '';
                cursos.forEach(function(curso) {
                    const pathImg = '../public/' + curso.imagem;
                    cursosHtml += `
                        <div class="col-md-4">  
                            <div class="card mb-4">  
                                <div class="card-body d-flex flex-column align-items-center"> 
                                    <img src="${pathImg}" width="200" height="100">  
                                    <h5 class="card-title">${curso.nome_curso}</h5>  
                                    <p class="card-text">${curso.descricao}</p>  
                                    <p class="card-text"><strong>Investimento:</strong> ${curso.preco}</p>  
                                    <button class="btn btn-success ver-curso" style="border-radius:25px; width:150px; " data-id="${curso.id}" data-toggle="modal" data-target="#verCursoModal">Ver Curso</button>  
                                </div>  
                            </div>  
                        </div>
                    `;
                });

                adicaoCurso = `
                <div class="col-md-4">  
                    <div class="card mb-4">  
                        <div class="card-body">  
                            <img src="" width="200" height="100">  
                            <h5 class="card-title">teste</h5>  
                            <p class="card-text">descrição</p>  
                            <p class="card-text"><strong>Investimento:</strong>Valor</p>  
                            <button class="btn btn-primary adicao-curso" data-toggle="modal" data-target="#adicionarCurso">Adicionar <i class="fa fa-i-cursor" aria-hidden="true"></i></button>  
                        </div>  
                    </div>  
                </div>
                `;
                $('#cursos-container').html(cursosHtml);
                $('#cursos-adicao').html(adicaoCurso);
            },
            error: function(error) {
                console.log("Erro ao carregar os cursos: ", error);
            }
        });
    }

    $(document).on('click', '.ver-curso', function() {
        const cursoId = $(this).data('id');
        $.ajax({
            url: `http://localhost:8080/listarCursos/${cursoId}`,
            type: 'GET',
            success: function(response) {
                const curso = JSON.parse(response);
                const pathImg = '../public/' + curso.imagem;

                $('#curso-id').data('id', curso.id);
                $('#ver-titulo').text(curso.nome_curso);
                $('#ver-descricao').text(curso.descricao);
                $('#ver-imagem').attr('src', pathImg);
                $('#ver-preco').text(curso.preco);

                $('#visualizacaoCurso').show();
                $('#editarCursoForm').hide();
                $('#salvarCurso').hide();
                $('#editar-curso').show();
            },
            error: function(error) {
                console.log("Erro ao carregar os detalhes do curso: ", error);
            }
        });
    });

    $('#editar-curso').on('click', function() {
        $('#visualizacaoCurso').hide();
        $('#editarCursoForm').show();
        $('#salvarCurso').show();
        $('#editar-curso').hide();

        $('#curso-id-hidden').val($('#curso-id').data('id'));
        $('#titulo').val($('#ver-titulo').text());
        $('#descricao').val($('#ver-descricao').text());
        $('#preco').val($('#ver-preco').text());
    });

    $('#salvarCurso').on('click', function(e) {
        e.preventDefault();

        const cursoId = $('#curso-id-hidden').val();
        const formData = {
            nome_curso: $('#titulo').val(),
            descricao: $('#descricao').val(),
            preco: $('#preco').val()
        };

        $.ajax({
            url: `http://localhost:8080/editarCurso/${cursoId}`,
            type: 'POST',
            data: formData,
            success: function(response) {
                alert('Curso atualizado com sucesso!');
                location.reload(); // Recarrega a lista de cursos
            },
            error: function() {
                alert('Erro ao atualizar o curso.');
            }
        });
    });

    $('#deleteCurso').on('click', function() {
        const cursoId = $('#curso-id').data('id');

        if (confirm('Você tem certeza que deseja deletar este curso?')) {
            $.ajax({
                url: `http://localhost:8080/deletarCurso/${cursoId}`,
                type: 'DELETE',
                success: function() {
                    alert('Curso deletado com sucesso!');
                    location.reload();
                },
                error: function(error) {
                    console.log("Erro ao deletar o curso: ", error);
                }
            });
        }
    });
});

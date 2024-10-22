$(document).ready(function(){
    $.ajax({
        url: 'http://localhost:8080/listarCursos', 
        type: 'GET',
        success: function(response) {
           const cursos = JSON.parse(response);
           console.log(cursos);
            let cursosHtml = '';
            
            cursos.forEach(function(curso) {
                const pathImg = '../public/' + curso.imagem;
                cursosHtml += `
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <div class="card-body">
                                <h5 class="card-title">${curso.nome_curso}</h5>
                                <img src=${pathImg} width="200" height="100">
                                <p class="card-text">${curso.descricao}</p>
                                <p class="card-text"><strong>Investimento:</strong> ${curso.preco}</p>
                            </div>
                        </div>
                    </div>
                `;
            });

            $('#cursos-container').html(cursosHtml);
        },
        error: function(error) {
            console.log("Erro ao carregar os cursos: ", error);
        }
    });
});

## desafio_revvo
## Projeto CRUD de Cursos

  Este é um projeto de CRUD (Create, Read, Update, Delete) de cursos, desenvolvido em PHP 8.3.12 com Bootstrap para o frontend e MySQL como banco de dados. 
    O projeto roda utilizando o servidor local do PHP e o ambiente de desenvolvimento Laragon para gerenciar o frontend.  

## Tecnologias Utilizadas
    **PHP 8.3.12**
    **Bootstrap 4.5.2**
    **Banco de dados MySQL**
    **Laragon (para gerenciar o frontend)**
    **jQuery (para AJAX)**


## Pré-requisitos
    PHP 8.3 ou superior
    MySQL
    Laragon (ou outro ambiente de desenvolvimento para gerenciar o frontend)

## Instruções de Configuração

1. Clonando o Projeto
    Clone o repositório para sua máquina local: git clone https://github.com/Natalia0702/desafio-revvo.git
    Obs: Caso seja utilizado o laragon o projeto deverá ser clonado na pasta www dentro da pasta laragon
    Execute na raiz do projeto o comando **composer install**

2. Banco de Dados
    Execute o script SQL para criar as tabelas e popular os dados:
        arquivo .sql está na pasta database na raiz do projeto
    Preencha o arquivo .envExample com os dados do seu banco de dados e renomeie para .env

4. Configuração do Backend
    Navegue até a pasta raiz do projeto.
    Inicie o servidor PHP com o comando:

    **php -S localhost:8080**

    ao rodar o projeto em laragon ele irá ser acessado por este link: **localhost/desafio-revvo/public**

5. Frontend com Laragon
    O frontend está configurado para rodar com Laragon. 
    Certifique-se de que o Laragon está instalado e funcionando corretamente. 
    O projeto estará acessível através do painel do Laragon, e você poderá acessar a aplicação pelo navegador.

6. Funcionalidades
    O sistema permite:

    Adicionar novos cursos
    Listar todos os cursos
    Editar cursos existentes
    Deletar cursos

7. Estrutura do Projeto
    /public: Contém os arquivos públicos do projeto, incluindo os scripts JS e CSS.
    /database: Script SQL para criação e inserção dos dados no banco.
    /controllers: Contém os arquivos responsáveis pela lógica de controle do CRUD.
    /models: Contém os arquivos que interagem diretamente com o banco de dados.






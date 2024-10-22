## desafio_revvo
## Projeto CRUD de Cursos

  <p>Este é um projeto de CRUD (Create, Read, Update, Delete) de cursos, desenvolvido em PHP 8.3.12 com Bootstrap para o frontend e MySQL como banco de dados.</p> 
  <p>O projeto roda utilizando o servidor local do PHP e o ambiente de desenvolvimento Laragon para gerenciar o frontend.</p>  

## Tecnologias Utilizadas
    PHP 8.3.12
    Bootstrap 4.5.2
    Banco de dados MySQL
    Laragon (para gerenciar o frontend)
    jQuery (para AJAX)


## Pré-requisitos
    PHP 8.3 ou superior
    MySQL
    Laragon (ou outro ambiente de desenvolvimento para gerenciar o frontend)

## Instruções de Configuração

1. Clonando o Projeto
   <p> Clone o repositório para sua máquina local: git clone https://github.com/Natalia0702/desafio-revvo.git </p> 
   <p> Obs: Caso seja utilizado o laragon o projeto deverá ser clonado na pasta www dentro da pasta laragon </p>  
   <p>  Execute na raiz do projeto o comando  </p>  
  
  **composer** **install**

2. Banco de Dados
     <p> Execute o script SQL para criar as tabelas e popular os dados: arquivo .sql está na pasta database na raiz do projeto</p>
   
    <p> Preencha o arquivo .envExample com os dados do seu banco de dados e renomeie para .env</p>

4. Configuração do Backend
   <p> Navegue até a pasta raiz do projeto.</p>  
   <p> Inicie o servidor PHP com o comando:</p>

    **php -S localhost:8080**

    <p>ao rodar o projeto em laragon ele irá ser acessado por este link: **localhost/desafio-revvo/public**

5. Frontend com Laragon
    <p> O frontend está configurado para rodar com Laragon.</p>   
    <p>Certifique-se de que o Laragon está instalado e funcionando corretamente.</p>   
    <p>O projeto estará acessível através do painel do Laragon, e você poderá acessar a aplicação pelo navegador.</p> 

6. Funcionalidades
    <p>O sistema permite:

    <p>Adicionar novos cursos</p>  
    <p>Listar todos os cursos</p> 
    <p>Editar cursos existentes</p> 
    <p>Deletar cursos</p> 

7. Estrutura do Projeto
    <p>public: Contém os arquivos públicos do projeto, incluindo os scripts JS e CSS.</p>
    <p>database: Script SQL para criação e inserção dos dados no banco.</p>
    <p>controllers: Contém os arquivos responsáveis pela lógica de controle do CRUD.</p>
    <p>models: Contém os arquivos que interagem diretamente com o banco de dados.</p>






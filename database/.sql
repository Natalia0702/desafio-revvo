CREATE DATABASE sistemaCursos;

USE sistemaCursos;

CREATE TABLE cursos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome_curso VARCHAR(100) NOT NULL,
    descricao TEXT,
    data_inicio DATE,
    data_fim DATE,
    preco DECIMAL(10, 2)
);

ALTER TABLE cursos
ADD imagem VARCHAR(255);

INSERT INTO cursos (nome_curso, descricao, data_inicio, data_fim, preco, imagem)
VALUES
('Introdução ao Desenvolvimento Web', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', '2024-01-15', '2024-03-15', 599.99, 'imagens/curso1.jpg'),
('Curso Avançado de PHP', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', '2024-02-01', '2024-04-30', 899.99, 'imagens/curso2.jpg'),
('Design Gráfico para Iniciantes', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', '2024-03-01', '2024-05-01', 499.99, 'imagens/curso3.jpg'),
('Marketing Digital 101', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', '2024-01-10', '2024-02-28', 399.99, 'imagens/curso4.jpg'),
('Gestão de Projetos Ágeis', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', '2024-04-01', '2024-06-30', 1099.99, 'imagens/curso5.jpg'),
('Desenvolvimento de Apps Móveis', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', '2024-05-01', '2024-07-15', 799.99, 'imagens/curso6.jpg'),
('Introdução à Inteligência Artificial', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', '2024-03-10', '2024-05-25', 999.99, 'imagens/curso7.jpg'),
('Edição de Vídeo para Iniciantes', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', '2024-06-01', '2024-08-01', 599.99, 'imagens/curso8.jpg'),
('Curso Completo de Data Science', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', '2024-04-05', '2024-06-30', 1199.99, 'imagens/curso9.jpg'),
('Design de Experiência do Usuário (UX)', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', '2024-02-20', '2024-04-15', 699.99, 'imagens/curso10.jpg');


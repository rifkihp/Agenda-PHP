CREATE DATABASE agenda;

CREATE TABLE contacts(
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(150),
    phone VARCHAR(20),
    observations TEXT
);

INSERT INTO contacts (name, phone, observations) VALUES
('Ana', '(13)995671223', 'Conhecido por ser um cliente regular.'),
('João', '(13)9923451245', 'Costuma fazer pedidos grandes.'),
('Maria', '(13)9918235678', 'Amiga próxima do dono.'),
('Carlos', '(13)12345678', 'Novo cliente.'),
('Fernanda', '(13)98765432', 'Fornecedor confiável.'),
('Pedro', '(13)98765432', 'cliente antigo'),
('Laura', '(13)98765432', 'Antigo cliente, às vezes pede grandes quantidades.');

    
CREATE DATABASE crud_pdo;
use crud_pdo_pdo;

CREATE TABLE usuarios(
id INT AUTO_INCREMENT PRIMARY KEY,
email VARCHAR(100) not null unique,
nome varchar (100) not null,
senha varchar(255)
);

select * from usuarios;
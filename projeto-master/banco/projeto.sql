-- Geração de Modelo físico
-- Sql ANSI 2003 - brModelo.



CREATE TABLE usuario (
cod_usuario int NOT NULL AUTO_INCREMENT PRIMARY KEY,
senha varchar(15),
email varchar(50),
nome varchar(50),
tipo_user int
);

CREATE TABLE noticia (
cod_noticia int NOT NULL AUTO_INCREMENT PRIMARY KEY,
data_noticia date,
descricao text,
status tinyint,
titulo varchar(150),
qtd tinyint
);

CREATE TABLE avaliacao (
cod_avaliacao int NOT NULL AUTO_INCREMENT PRIMARY KEY,
nome varchar(100),
descricao text,
data_avaliacao date
);

CREATE TABLE cadastrar (
cod_usuario int,
cod_noticia int,
cod_avaliacao int,
FOREIGN KEY(cod_usuario) REFERENCES usuario (cod_usuario),
FOREIGN KEY(cod_noticia) REFERENCES noticia (cod_noticia),
FOREIGN KEY(cod_avaliacao) REFERENCES avaliacao (cod_avaliacao)
);


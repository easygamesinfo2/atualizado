-- Geração de Modelo físico
-- Sql ANSI 2003 - brModelo.



CREATE TABLE usuario (
cod_usuario int NOT NULL AUTO_INCREMENT PRIMARY KEY,
senha_usuario varchar(15),
email_usuario varchar(30),
nome_usuario varchar(50),
tipo_usuario int
);

CREATE TABLE noticia (
cod_noticia int NOT NULL AUTO_INCREMENT PRIMARY KEY,
data_noticia date,
status tinyint,
titulo_noticia varchar (100),
qtd tinyint,
descricao_noticia text
);

CREATE TABLE avaliacao (
cod_avaliacao int NOT NULL AUTO_INCREMENT PRIMARY KEY,
nome_avaliacao varchar(50),
descricao_avaliacao text,
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


create database crud

create table dados
(
	id_dado int not null PRIMARY KEY AUTO_INCREMENT,
	nome varchar(60),
	email varchar(100)
);

create table endereco
(
	id_endereco int not null PRIMARY KEY AUTO_INCREMENT,
	rua varchar(60),
	bairro varchar(60),
	numero int,
	id_dado int not null
);
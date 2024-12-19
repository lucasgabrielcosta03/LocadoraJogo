CREATE DATABASE locadoraJogos;
use locadoraJogos;

CREATE TABLE tblusuario (

  	usrid int(11) not null primary key auto_increment,
    usrnome varchar(50) not null,
    usrusuario varchar(10) not null,
    usrsenha varchar(6) not null
);

CREATE TABLE tbljogo (

  	jgid int(11) not null primary key auto_increment,
    jgNome varchar(50) not null,
    jgTipo varchar(10) not null,
    jgDataDeVolucao varchar(6) not null
);

CREATE TABLE tblcomprador (
  userid int(11) not null primary key auto_increment,
  usrUsuario varchar(20) not null,
  userTelefone varchar(11) not null,
  userDataPegaJogo varchar(11) not null

);




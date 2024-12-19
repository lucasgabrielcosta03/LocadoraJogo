<?php
$conexao = mysqli_connect("localhost", "root", "");
$comando = ("CREATE DATABASE IF NOT EXISTS locadoraJogos");

mysqli_query($conexao, $comando);

$conexao = mysqli_connect("localhost","root","","locadoraJogos");

$comando = ("CREATE TABLE IF NOT EXISTS tblusuarios  (usrid int(11) not null primary key auto_increment,
usrNome varchar(50) not null,
usrUsuario varchar(10) not null,
usrSenha varchar(10) not null)");

mysqli_query($conexao, $comando);

$comando1 = ("CREATE TABLE IF NOT EXISTS tblcomprador (
usrid int(11) not null primary key auto_increment,
usrUsuario varchar(20) not null,
usrTelefone varchar(11) not null,
usrDataPegaJogo varchar(11) not null);");

$comando2 = ("CREATE TABLE IF NOT EXISTS tbljogo (
jgid int(1) not null primary key auto_increment,
jgNome varchar(30) not null,
jgTipo varchar(30) not null,
jgDataDeVolucao varchar(20));");

mysqli_query($conexao, $comando1);

mysqli_query($conexao, $comando2);



?>
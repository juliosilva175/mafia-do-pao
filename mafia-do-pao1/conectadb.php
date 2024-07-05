<?php
//LOCALIZA ONDE ESTÁ O BANCO DE DADOS
$SERVIDOR = "localhost";

//Nome do Banco 
$banco = "mafia";

// qual usuario vai operar na base de dados 
$usuario = "root";

// QUAL A SENHA DO USUARIO NA BASE DE DADOS 
$SENHA = "";

//LINK que a ferramenta vai usar para conectar o Banco
$link = mysqli_connect($servidor, $usuario, $ senha, $ banco);
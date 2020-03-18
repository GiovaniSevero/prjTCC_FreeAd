<?php
//Código para criar database
$servidor = "localhost";
$usuario = "root";
$senha = "minas";//minas

$conexao = mysqli_connect($servidor, $usuario, $senha);

$sql = "CREATE DATABASE empresa";

if(!mysqli_query($conexao,$sql))
	echo "Falha na criação do Database!" . mysqli_connect_error();
else
	echo "Database criado com sucesso!";

?>
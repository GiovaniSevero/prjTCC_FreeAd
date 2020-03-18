<?php
//Código para criar database
$servidor = "localhost";
$usuario = "root";
$senha = "minas";//
$database = "empresa";

$conexao = mysqli_connect($servidor, $usuario, $senha, $database);

	 $sql = "CREATE TABLE usuarios (
	        id INT AUTO_INCREMENT PRIMARY KEY,
			nome VARCHAR(40),
			login VARCHAR(40),
			senha VARCHAR(32)
			)";
	
      if (!mysqli_query($conexao,$sql)) 
		 echo "Falha na criação da Tabela!" . mysqli_connect_error();
	  else echo "Tabela criada com sucesso!";
  	  
?>
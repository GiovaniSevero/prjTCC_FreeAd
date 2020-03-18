<?php
	include 'conexao.php';

	if (isset($_POST["nome"]) && isset($_POST["login"]) && isset($_POST["senha"])) {
		$nome = $_POST["nome"];
		$login = $_POST["login"];
		$senha = md5($_POST["senha"]);

		$sql = "SELECT * FROM usuarios WHERE login LIKE '$login'";
		$resultado = mysqli_query($conexao, $sql);

		if(mysqli_num_rows($resultado) > 0){
			echo "<script>alert('Login já existe. Tente outro!')</script>";
		}
		else{
			$sql = "INSERT INTO usuarios VALUES(null,'$nome', '$login', '$senha')";
			if (mysqli_query($conexao, $sql)) {
				echo "<script>alert('Cadastro realizado com sucesso!');
				window.location.href = 'login.php'; </script>";
			}
			else{
				die("Falha ao cadastrar");
			}
		}

	}
?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>CADASTRO DO USUÁRIO</title>
		<!-- Meta tags Obrigatórias -->
		<link href="styles/bootstrap-4.1.2/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" type="text/css" href="styles/login.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
		
  </head>

  <body>

    <div class="container">
      <div class="py-5 text-center">
        <h2>Cadastre-se</h2>
		<p>Já tem cadastro?<a href="login.php"> Faça login</a></p>
      </div>
	  
	    
      
        <div class="col-md-12 text-center">
          <form class="needs-validation" novalidate method="post" action="">
            
              <div class="col-md-12 mb-3 text-left">
                <label for="nome">Nome Completo</label>
                <input type="text" class="form-control w-50" name="nome" id="nome" placeholder="" value="" required>
              </div>          

            <div class="col-md-3 mb-3 text-left">
              <label for="login">Login</label>
                <input type="text" class="form-control" name="login" id="login" placeholder="" required>
            </div>
			
			<div class="col-md-3 mb-3 text-left">
              <label for="senha">Senha</label>
                <input type="password" class="form-control" name="senha" id="senha" placeholder="" required>
            </div>
	  	  </div>
		
          
        <hr class="mb-4">
		<div id="row">
		<div class="col-md-12">
            <button class="col-md-6 btn btn-primary btn-lg btn-block m-auto" type="submit">Cadastrar</button>
          </form>		  
        </div>	
		</div>
		
	  

	  <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; Etec Dr. Demétrio Azevedo Jr. - Técnico em Desenvolvimento de Sistemas</p>
      </footer>
	  
  	</div><!-- fim class container -->	
	<!-- documentos javascript -->
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js"></script>
  </body>
</html>
<?php
   session_start();
   include 'conexao.php';

   if ( isset($_POST["login"]) && isset($_POST["senha"])) {
      $login = $_POST["login"];
      $senha = md5($_POST["senha"]);

      $sql = "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'";
      $resultado = mysqli_query($conexao, $sql);

      if(mysqli_num_rows($resultado) == 1){
         $_SESSION["login"] = $login;
         header("Location:index.php");
      }
      else{
         echo "<script>alert('Login e/ou senha incorretos! Tente novamente!')</script>";
      }
   }
?>
<link href="styles/bootstrap-4.1.2/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" type="text/css" href="styles/login.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="sidenav">
         <div class="login-main-text">
            <h2>Application<br> Login Page</h2>
            <p>Login or register from here to access.</p>
         </div>
      </div>
      <div class="main">
         <div class="col-md-6 col-sm-12">
            <div class="login-form">
               <form class="form-signin" action="" method="post">
                  <div class="form-group">
                     <label>User Login</label>
                     <input type="text" class="form-control" placeholder="User Login" name="login">
                  </div>
                  <div class="form-group">
                     <label>Password</label>
                     <input type="password" class="form-control" placeholder="Password" name="senha">
                  </div>
                  <button type="submit" class="btn btn-black">Login</button>
                  <br><br>
                  <p>Não tem acesso?<a href="cadastro.php"> Faça seu cadastro!</a></p>
            </div>
         </div>
      </div>
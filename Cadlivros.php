
<?php include ("conexao.php"); 
session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
  </head>

  <?php
    if(isset($_SESSION['msg'])){
      echo $_SESSION['msg'];
      unset($_SESSION['msg']);
    }
    ?>
    <form method="POST" action="processa.php">
  <body>
<div class="login-box">
  <h1>Resgistro Livros</h1>
  <div class="textbox">
    <i class="fas fa-user"></i>
    <input type="text" name="autor" placeholder="Autor" required>
  </div>
  <div class="textbox">
    <i class="fas fa-user"></i>
    <input type="text" name="titulo" placeholder="Título" required>
  </div>
  <div class="textbox">
    <i class="fas fa-user"></i>
    <input type="text" name="editora" placeholder="Editora" required>
  </div>
  <div class="textbox">
    <i class="fas fa-user"></i>
    <input type="text" name="imgurl" placeholder="Copie a url da imagem de capa" required>
  </div>
  <input type="submit" class="btn" value="Cadastrar">

  </form>
  
</div>
  </body>
</html>
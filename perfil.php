<?php
   include('verifica_login.php');
   ?>
<link rel="stylesheet" type="text/css" href="index.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<!DOCTYPE html>
<head>
   <meta charset="utf-8">
   <title>PERFIL</title>
   <script src="https://kit.fontawesome.com/a076d05399.js"></script>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
   <!---------------------------------------- NAVBAR ------------------------------------------------!-->
   <nav>
      <div class="logo">
         LIVROS
      </div>
      <input type="checkbox" id="click">
      <label for="click" class="menu-btn">
      <i class="fas fa-bars"></i>
      </label>
      <ul>
         <li><a class="active" href="index.php">Home</a></li>
         <li><a href="recentes.php">Livros Recentes</a></li>
         <li><a href="perfil.php">Perfil</a></li>
         <li><a href="chat.php">Chat</a></li>
         <?php
        if(isset($_SESSION['email'])):
          ?>
            <li><a href='Cadlivros.php'>Cadastrar Livro</a></li>
            <li><a href='logout.php'>Logout</a></li>
        <?php
            else:
        ?>
            <li><a href='formcadastro.php'>Cadastro</a></li> 
            <li><a href='formlogin.php'>Login</a></li>
        <?php
          endif;
        ?>
        </ul>
   </nav>
   <!---------------------------------------- BANNER ------------------------------------------------!-->
   <div class="bannerimage">
      <h4>PERFIL</h4>
   </div>
   <!---------------------------------------- TEXTO1 ------------------------------------------------!-->
   <div style=" padding-bottom: 70px;">
   <div class="conteudo container" >
   <?php
      if(isset($_SESSION['sucesso'])):
    ?>
    <div class="conteudo container">
    <p style="color: rgb(0,200,0);" style="text-align: center;">Livro cadastrado com sucesso!</p>
    </div>
    <?php
      endif;
      unset($_SESSION['sucesso']);
    ?>
      <?php
         if(isset($_SESSION['erro'])):
         ?>
      <div style="color: rgb(225,0,0);">
         <p>Erro: o usuário não foi apagado.</p>
      </div>
      <?php
         endif;
         unset($_SESSION['erro']);
         ?>
   </div></div>
   					<div class="conteudo container" >
                        <br><div class=" DadosUsuario">
                        <h1>
                            <a class="Ancora"id="Digitieaqui"></a>Dados do Usuário
                        </h1>
                        <br><br>
                        <form id="contact">
                            <fieldset>
                                <p>Nome de Usuário</p>
                                <input placeholder="Nome do Usuário" type="text" tabindex="1" value="Nome de Exemplo"required>
                                </fieldset>
                                <p>Endereço de Email</p>
                                    <fieldset>
                                      <input placeholder="Endereço de email" type="email" tabindex="2" value="exemplo@prov.com" required>
                                    </fieldset>
                                    <fieldset>
                                    	<div id="botoes">
                                        <a href="logout.php">Sair</a>&nbsp;
                                        <a href="excluir.php">Excluir</a>&nbsp;
                                        <a href="formeditusuario.php">Editar</a>&nbsp;
                                    </div>
                                    </fieldset>
                                </form></div>
                    </div>
   <!---------------------------------------- TEXTO1 ------------------------------------------------!-->
   <div class="jumbotron jumbo2" style="background-color: #FFCC00;">
      <div class="container">
         <form class="formulario">
            <h1> Fale Conosco <a name= "faq"></a></h1>
            <br>
            <div class="form-group">
               <label for="exampleFormControlInput1">Email</label>
               <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="exemplo@email.com" required>
            </div>
            <div class="form-group">
               <label for="exampleFormControlInput1">Nome</label>
               <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nome" required>
            </div>
            <div class="form-group">
               <label for="exampleFormControlSelect2">Fale conosco</label>
               <select multiple class="form-control option" id="exampleFormControlSelect2" required>
                  <option>Esqueci a senha </option>
                  <option>Mudar a senha </option>
                  <option>Reportar bug</option>
                  <option>Outros</option>
               </select>
            </div>
            <div class="form-group">
               <label for="exampleFormControlTextarea1">Mensagem </label>
               <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">&nbsp;&nbsp;Enviar&nbsp;&nbsp;</button>
         </form>
      </div>
      <hr class="my-4">
   </div>
   <!---------------------------------------- FOOTER ------------------------------------------------!-->
   <script src="https://kit.fontawesome.com/a076d05399.js"></script>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <body>
      <footer>
      <div class="main-content">
      <div class="left box">
         <h2>
            Sobre nós
         </h2>
         <div class="content">
            <p>Este é um projeto realizado como trabalho de conclusão de curso de: Beatriz Figueiredo, Beatriz Menezes, Guilherme Kina, Leonardo Akahoshi, Paulo Gabriel e Pedro Miranda.</p>
            <div class="social">
               <a href="https://facebook.com"><span class="fab fa-facebook-f"></span></a>
               <a href="https://twitter.com"><span class="fab fa-twitter"></span></a>
               <a href="https://instagram.com"><span class="fab fa-instagram"></span></a>
               <a href="https://youtube.com"><span class="fab fa-youtube"></span></a>
            </div>
         </div>
      </div>
      <div class="center box">
         <h2>
            Contato
         </h2>
         <div class="content">
            <div class="place">
               <span class="fas fa-map-marker-alt"></span>
               <span class="text">Etec PJ</span>
            </div>
            <div class="phone">
               <span class="fas fa-phone-alt"></span>
               <span class="text">9-9999-9999</span>
            </div>
            <div class="email">
               <span class="fas fa-envelope"></span>
               <span class="text">Exemplo@gmail.com</span>
            </div>
         </div>
      </div>
      <div class="right box">
      <h2>
         Ajuda
      </h2>
      <div class="content">
      <form action="#">
      <div class="email">
         <div class="text">
            Email *
         </div>
         <input type="email" value="Exemplo@gmail.com">
         <a class="linkrodape" href="#faq">FAQ</a>
      </div>
      <div class="bottom">
         <center>
            <span class="credit">distribuído por <a href="#">Livros</a> | </span>
            <span class="far fa-copyright"></span> 2020 Todos os direitos reservados.
         </center>
      </div>
</body>
</html>
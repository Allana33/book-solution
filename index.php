<?php

session_start();
ob_start();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-ico">
    <link rel="stylesheet" href="assets/css/index.css">
    <title>Login</title>
</head>

<body>
    <div class="lottie-bg">
        <lottie-interactive path="assets/animations/bookbg2.json"  background="transparent" speed="1.0" loop  autoplay style="left:0; right:0; top:0; bottom:0; position: absolute;">
    </div>       
    <div class="center">
      
      <h1>Login</h1>
      <form method="POST" action="login.php">
        <div class="txt_field">
          <input type="text" required name="usuario" value="<?php if(isset($dados['usuario'])){ echo $dados['usuario']; } ?>">
          <span></span>
          <label>Usuário</label>
        </div>
        <div class="txt_field">
          <input type="password" required name="senha_usuario" value="<?php if(isset($dados['senha_usuario'])){ echo $dados['senha_usuario']; } ?>">
          <span></span>
          <label>Senha</label>
        </div>
        <a class="pass">Esqueceu senha?</a>
        <div class="pass"></div>
        <div class='txt_field' style='color: #ff0000'><p>
<?php 

if(isset($_SESSION['msg'])){
  echo $_SESSION['msg'];
  unset($_SESSION['msg']);
}

?>

        </p></div>
        <input type="submit" value="Login" name="Login">        
        <div class="signup_link">
         <!-- Não é membro? <a href="#">Cadastre-se</a>-->
        </div>        
      </form>
    </div>
   
  
        <!--  Custom Scripts       -->
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<script type="text/javascript" src="https://unpkg.com/lottie-interactive@latest/dist/lottie-interactive.js"></script>


</body>

</html>
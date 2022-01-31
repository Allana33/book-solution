<?php
include_once 'conexao.php';
include_once 'login.php';
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

        <lottie-interactive path="assets/animations/bookbg.json"  background="transparent" speed="0.5" loop  autoplay style="left:0; right:0; top:0; bottom:0; position: absolute;">

    </div>        
        
            <div class="box-login">
            <h1>Login</h1> 

                <form method="POST" action="">

                   <label>Usuário</label>
                      <input type="text" name="usuario" placeholder="Usuário" value="<?php if(isset($dados['usuario'])){ echo $dados['usuario']; } ?>"><br><br>

                    <label>Senha</label>

                      <input type="password" name="senha_usuario" placeholder="Senha" value="<?php if(isset($dados['senha_usuario'])){ echo $dados['senha_usuario']; } ?>"><br><br>

                      <input type="submit" value="Acessar" name="Login">

                </form>
                
</div>
   
  
        <!--  Custom Scripts       -->
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<script type="text/javascript" src="https://unpkg.com/lottie-interactive@latest/dist/lottie-interactive.js"></script>


</body>

</html>
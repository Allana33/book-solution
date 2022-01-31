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
    
    <h1>Login</h1>

    <?php


    ?>

    <form method="POST" action="">
        <label>Usuário</label>
        <input type="text" name="usuario" placeholder="Usuário" value="<?php if(isset($dados['usuario'])){ echo $dados['usuario']; } ?>"><br><br>

        <label>Senha</label>
        <input type="password" name="senha_usuario" placeholder="Senha" value="<?php if(isset($dados['senha_usuario'])){ echo $dados['senha_usuario']; } ?>"><br><br>

        <input type="submit" value="Acessar" name="Login">
    </form>

    <br><br>
    Usuário: thor<br>
    Senha: 1234
</body>

</html>
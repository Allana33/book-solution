<?php 

session_start();
ob_start();

if((!isset($_SESSION['id'])) AND (!isset($_SESSION['usuario']))){
    $_SESSION['msg'] = "<p style='color: #ff0000'>Erro: Necessário realizar o login para acessar a página!</p>";
    header("Location: index");
}


include "cabecalho.php";  
include "menu.php";
include "rodape.php"; ?>

<body>


<body>
    <h1>Bem vindo!</h1>

    <a href="sair.php">Sair</a>





</body>

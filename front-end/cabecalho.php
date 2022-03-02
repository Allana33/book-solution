<?php

if( !isset($_SESSION['id']) OR !isset($_SESSION['usuario'])){
    $_SESSION['msg'] = "<p style='color: #ff0000'>Erro: Necessário realizar o login para acessar a página!</p>";
    header("Location: index.php");
    
}

?>

<!DOCTYPE html>

<html lang="pt-br">

<head>
    
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" href="assets/img/faviconx.png" type="image">

<!-- Bootstrap outros Frameworks -->

<!-- fim Bootstrap outros Frameworks -->

<!-- main css -->

<link rel="stylesheet" href="assets/css/main.css">
<link rel="stylesheet" href="assets/css/reset.css">
<link rel="stylesheet" href="assets/css/menu.css">
<link rel="stylesheet" href="assets/css/funcionario.css">

<!-- fim main css -->

<title class="titlesite">Book Solution</title>

</head>
<body>

<?php
session_start();
ob_start();
include_once 'conexao.php';

if((!isset($_SESSION['id'])) AND (!isset($_SESSION['usuario']))){
    $_SESSION['msg'] = "<p style='color: #ff0000'>Erro: Necessário realizar o login para acessar a página!</p>";
    header("Location: index.php");
}


include "Layout.php";
$layout = new Layout();
$layout->conteudo("cabecalho");
$layout->conteudo("home_conteudo");
$layout->conteudo("rodape");





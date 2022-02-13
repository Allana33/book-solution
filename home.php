<?php


/*include "Layout";
$layout = new Layout();
$layout->conteudo("cabecalho");
$layout->conteudo("menu");
$layout->conteudo("home_conteudo");
$layout->conteudo("rodape");*/

include "Layout.php";
$layout = new Layout();
$layout->conteudo = "home_conteudo";
$layout->index();

?>






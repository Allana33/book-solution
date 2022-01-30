<?php

include_once 'conexao.php';

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if (!empty($dados['onlogin'])) {

    var_dump($dados);
    
}

<?php
session_start();

include_once 'conexao.php';

//password_hash ('senha_usuario', PASSWORD_DEFAULT); // Criptografia da senha

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if (!empty($dados['login'])) {

    var_dump($dados);
    $query_usuario =  "SELECT id_usuario, usuario, senha_usuario 
    FROM usuarios 
    WHERE usuario =:usuario
    LIMIT 1";

    $result_usuario = $conn->prepare($query_usuario);
    $result_usuario->bindParam(':usuario', $dados['usuario'], PDO::PARAM_STR);
    $result_usuario->execute();

    if(($result_usuario) AND ($result_usuario->rowCount() != 0)){
        $row_usuario = $result_usuario->fetch(PDO::FETCH_ASSOC);
        var_dump($row_usuario);
        if(password_verify($dados['senha_usuario'], $row_usuario['senha_usuario'])){
            echo "Usuário Logado";
        } else {
            $_SESSION['msg'] = "<p> Senha inválida.</p>";
        }
        
    } 

}

if (isset($_SESSION['msg'])){
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);

}

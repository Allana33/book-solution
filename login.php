<?php
session_start();
ob_start();


$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);


if (!empty($dados['Login'])) {
    $usuario = logarUsuario($conn,$dados['usuario'],$dados['senha_usuario']);
    if($usuario){
            $_SESSION['id'] = $usuario['id_usuario'];
            $_SESSION['nome'] = $usuario['usuario'];
            header("Location: dashboard.php");
    }else{
        $_SESSION['msg'] = "<p style='color: #ff0000'>Erro: Usuário ou senha inválida!</p>";
    }

    
}

if(isset($_SESSION['msg'])){
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
}

    function logarUsuario($conn,$email, $senha)
    {
        try {
            $sql  = "SELECT * FROM usuarios WHERE usuario = :email AND senha_usuario = :senha";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':senha', $senha);
            $stmt->execute();
            return json_decode(json_encode($stmt->fetch()), true);
        }
        catch (PDOException $e) {
            echo "Error:" . $e->getMessage();
        }
    }
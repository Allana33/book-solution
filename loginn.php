<?php




include_once 'conexao.php';

session_start();
ob_start();

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);


if (!empty($dados['Login'])) {
    $usuario = logarUsuario($conn,$dados['usuario'],$dados['senha_usuario']);
    if($usuario){
            $_SESSION['id'] = $usuario['id_usuario'];
            $_SESSION['nome'] = $usuario['usuario'];
            header("Location: home");
    }else{
        $_SESSION['msg'] = "Erro: Usuário ou senha inválida!";
        header("Location: index");
    }

}

    function logarUsuario($conn,$email, $senha)
    {
        try {
            $sql  = "SELECT * FROM usuarios WHERE usuario = :email_usuario";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':email_usuario', $email);
            $stmt->execute();
            if($usuario = $stmt->fetch()){
                if(password_verify($senha,$usuario['senha_usuario'])){

                    return json_decode(json_encode($usuario), true);

                }
                
            }
            
        }
        catch (PDOException $e) {
            echo "Error:" . $e->getMessage();
        }

        return null;
    }


    /*if(isset($_SESSION['msg'])){
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
}*/
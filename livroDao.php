<?php


/*include "conexao.php";


$dadoslivro = filter_input_array(INPUT_POST, FILTER_DEFAULT);


if (!empty($dadoslivro['cadastro'])) {
    $livro = cadastroLivro($conn,$dadoslivro['titulo'],$dadoslivro['codigo']);
    if($livro){
            $_POST['titulo'] = $livro['titulo'];
            $_POST['codigo'] = $livro['codigo'];

    }else{
        $_POST['msg'] = "<p style='color: #ff0000'>Erro: qqdeu!</p>";
    }

}

if(isset($_POST['msg'])){
    echo $_POST['msg'];
    unset($_POST['msg']);
}

function cadastroLivro($conn,$dadoslivro)
{
    try {
        $sql  = "INSERT INTO livro (titulo, codigo) VALUES (':titulo', ':codigo')";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':titulo', $titulo);
        $stmt->bindParam(':codigo', $codigo);
        $stmt->execute();
        return json_decode(json_encode($stmt->fetch()), true);
    }
    catch (PDOException $e) {
        echo "Error:" . $e->getMessage();
    }
}
*/
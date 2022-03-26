<?php 

include "Layout.php";
$layout = new Layout();
$layout->conteudo = "front-end/formulario_livro";
$layout->index();

// \/ daqui para baixo é só o cadastro, mysql etc. 

include "conexao.php";

$dadoslivro = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if (isset($dadoslivro['cadastro'])) {

    $titulo = $dadoslivro['titulo'];
    $codigo = $dadoslivro['codigo'];

    if($livro = cadastroLivro($conn,$titulo,$codigo)){

            $_POST['msg'] = "<p style='color: #00ff00>NAO CADASTRADO</p>";
            
    }else{

        $_POST['msg'] = "<p style='color: #00ff00'>CADASTRADO</p>";
    }

}

if(isset($_POST['msg'])){
    echo $_POST['msg'];
    unset($_POST['msg']);
}

function cadastroLivro($conn,$titulo,$codigo)
{
    try {
        $sql  = "INSERT INTO livro (titulo,codigo) VALUES (:titulo,:codigo)"; 
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':titulo', $titulo);
        $stmt->bindParam(':codigo', $codigo); //PARAM_INT < NUMERO // PARAM_XYZ Especificar tipo.
        $stmt->execute();
        return json_decode(json_encode($stmt->fetch()), true);
    }
    catch (PDOException $e) {
        echo "Error:" . $e->getMessage();
        
    }
}


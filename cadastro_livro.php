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
    $datapublicacao = $dadoslivro['data_publicacao'];

    if($livro = cadastroLivro($conn,$titulo,$codigo,$datapublicacao)){

            $_POST['msg'] = "<p style='color: red'>NAO CADASTRADO</p>";
            
    }else{

        $_POST['msg'] = "<p style='color: green'>CADASTRADO</p>";
    }

}

if(isset($_POST['msg'])){
    echo $_POST['msg'];
    unset($_POST['msg']);
}

function cadastroLivro($conn,$titulo,$codigo,$datapublicacao)
{
    try {
        $sql  = "INSERT INTO livro (titulo,codigo,data_publicacao) VALUES (:titulo,:codigo,:data_publicacao)"; 
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':titulo', $titulo);
        $stmt->bindParam(':codigo', $codigo); //PARAM_INT < NUMERO // PARAM_XYZ Especificar tipo.
        $stmt->bindParam(':data_publicacao', $datapublicacao);
        $stmt->execute();
        return json_decode(json_encode($stmt->fetch()), true);
    }
    catch (PDOException $e) {
        echo "Error:" . $e->getMessage();
        
    }
}


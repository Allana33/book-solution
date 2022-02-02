<?php 
include "Layout.php";
$layout = new Layout();
$layout->conteudo = "formulario_livro";
$layout->index();

// \/ daqui para baixo é só o cadastro, mysql etc. 

include "conexao.php";


$dadoslivro = filter_input_array(INPUT_POST, FILTER_DEFAULT);




if (isset($dadoslivro['cadastro'])) {

    $livro = cadastroLivro($conn,$dadoslivro['titulo']);
    if($livro){

            $_POST['msg'] = "<p style='color: #00ff00>Erro: Cadastrou mas nao tem erro?!</p>";
            
    }else{

        $_POST['msg'] = "<p style='color: #ff0000'>Erro: Cadastrou mas nao tem erro?!</p>";
    }

}

if(isset($_POST['msg'])){
    echo $_POST['msg'];
    unset($_POST['msg']);
}

function cadastroLivro($conn,$livro)
{
    try {
        $sql  = "INSERT INTO livro (titulo) VALUES (:titulo)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':titulo', $livro, PDO::PARAM_STR); //PARAM_INT < NUMERO // PARAM_XYZ Especificar tipo.
        $stmt->execute();
        return json_decode(json_encode($stmt->fetch()), true);
    }
    catch (PDOException $e) {
        echo "Error:" . $e->getMessage();
    }
}

/*if (isset($_POST['titulo'])){
$nome = $_POST['titulo'];
$codigo = $_POST['codigo'];
$botao = $_POST['cadastro'];


$dadoslivro = new Livro();


if($botao=="cadastro"){

    $livro->cadastroLivro($conn,$dadoslivro); 


}*/ // if botao cadastrar <-

//else if($botao=="buscar"){          -- aqui é para buscar no botao(submit 'value buscar', 'name botao' etc..) e aparecer a lista de Livros cadastradas na mesma página.
  //  $livroDao->buscarLivro();
    
 //   foreach ($livroDao->buscarLivro() as $resultado){
   //     echo $resultado['nome']."<br>";
   //     echo $resultado['valor']."<hr>";
   // }
//}       ---------------------------


//} // if(isset)


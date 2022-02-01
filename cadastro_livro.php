<?php 
include "Layout.php";
$layout = new Layout();
$layout->conteudo = "formulario_livro";
$layout->index();

// \/ daqui para baixo é só o cadastro, mysql etc. 


include "conexao.php";


$dadoslivro = filter_input_array(INPUT_GET, FILTER_DEFAULT);


if (!empty($dadoslivro['cadastro'])) {
    $livro = cadastroLivro($conn,$dadoslivro['titulo']);
    if($livro){
            $_GET['id'] = $livro['id_livro'];

    }else{
        $_GET['msg'] = "<p style='color: #ff0000'>Erro: qqdeu!</p>";
    }

}

if(isset($_GET['msg'])){
    echo $_GET['msg'];
    unset($_GET['msg']);
}

function cadastroLivro($conn,$livro)
{
    try {
        $sql  = "INSERT INTO livro (titulo) VALUES (':titulo')";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':titulo', $livro);
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


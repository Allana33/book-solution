
<?php 
include "Layout.php";
$layout = new Layout();
$layout->conteudo = "formulario";
$layout->index();

// \/ daqui para baixo é só o cadastro, mysql etc. 

include 'classes/Livro.php';
include 'classes/LivroDao.php';

if (isset($_GET['nome'])){
$nome = $_GET['nome'];
$codigo = $_GET['codigo'];
$url = $_GET['url'];
$botao = $_GET['botao'];


$livro = new Livro();
$livroDao = new LivroDao();

$livro->setNome($nome);
$livro->setCodigo($codigo);
$livro->setUrl($url);

if($botao=="cadastrar"){

    $livroDao->cadastrarLivro($livro); 


} // if botao cadastrar <-

//else if($botao=="buscar"){          -- aqui é para buscar no botao(submit 'value buscar', 'name botao' etc..) e aparecer a lista de Livros cadastradas na mesma página.
  //  $livroDao->buscarLivro();
    
 //   foreach ($livroDao->buscarLivro() as $resultado){
   //     echo $resultado['nome']."<br>";
   //     echo $resultado['valor']."<hr>";
   // }
//}       ---------------------------


} // if(isset)


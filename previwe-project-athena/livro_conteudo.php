
<h1 class="h1titulo">LIVROS</h1>
<form action="livro_conteudo.php" method="GET">

 <div class="card-group">
<?php

include 'classes/LivroDao.php';

$livroDao = new LivroDao();

if ($livroDao->buscarLivro() == 0){

    echo "<p style='color: white;'>Nenhum livro cadastrado.</p>";
    
} 

else {
    
    foreach ($livroDao->buscarLivro() as $resultado){
     
        echo "<div class='card-text'>";
        echo "<img src=".$resultado['url']." class='img-thumbnail' alt='X'>";
        echo "<div class='card'>";
        echo "<h5 >".$resultado['nome']."</h5>";
        echo "<p> Cód ".$resultado['codigo']."</p>";
        echo "<p class='card-text'><small class='text-muted'></small></p>";
        echo "</div>";
        echo "</div>";
        
    } 
}



?>
  
 </div>
</form>
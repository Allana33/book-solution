
<h1 class="h1titulo">LIVROS</h1>
<form action="livro_conteudo.php" method="GET">

 <div class="card-group">
<?php

include 'LivroDao.php';



if ($livroDao->buscarLivro() == 0){

    echo "<p style='color: white;'>Nenhum livro cadastrado.</p>";
    
} 

else {
    
    foreach ($livroDao->buscarLivro() as $result){
     
        echo "<div class='card-text' style='width:240px';>";
        echo "<img src=".$result['url']." class='img-thumbnail' alt='X' class='card-img-top' alt='not found' style='width: 240px'; height: 300px';>";
        echo "<div class='card' style='width: 212px';>";
        echo "<h5 class='card-title'>".$result['nome']."</h5>";
        echo "<p class='card-text'> Cód ".$result['codigo']."</p>";
        echo "</div>";
        echo "</div>";
        
    } 
}



?>
  
 </div>
</form>
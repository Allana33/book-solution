<?php

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "athena";

try{

    $conn = new PDO("mysql:host=$host;dbname=" . $dbname, $user, $pass);

    
}catch(PDOException $err){
    echo "Erro: Conexão com banco de dados não realizado com sucesso. Erro gerado " . $err->getMessage();
}
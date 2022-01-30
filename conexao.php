<?php

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "athena";
//$port = "1245"; caso tenha alguma porta para banco de dados/localhost

try {

	$conn = new PDO("mysql:host=$host;dbname=" . $dbname, $user, $pass);
	echo "Bem vindo.";

}catch(PDOException $erro){

	echo "Em manutenção." . $erro->getMessage();

}
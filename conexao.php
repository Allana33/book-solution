<?php

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "athena";
//$port = "1245"; caso tenha alguma porta para banco de dados/localhost

try {

	$conn = new PDO("mysql:host=$host;dbname=" . $dbname, $user, $pass);
	echo "";

}catch(PDOException $erro){

	echo "" . $erro->getMessage();

}
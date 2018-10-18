<?php

$conn = new mysqli("localhost", "root", "", "dbphp7"); //Cria a conexão com o banco de dados

if($conn->connect_error){ //Testa se ocorreu algum erro na conexão e retorna o erro
	echo "Error: ".$conn->connect_error; 
}

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (?,?)");

$stmt->bind_param("ss",$login,$pass);

$login = "user";
$pass = "12345";

$stmt->execute();

$login = "root";
$pass = "!@#$";

$stmt->execute();

?>
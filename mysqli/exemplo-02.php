<?php

$conn = new mysqli("localhost", "root", "", "dbphp7"); //Faz a conexão com o banco

if($conn->connect_error){ //Verifica se ocorreu algum erro
	echo "Error: ".$conn->connect_error;
}
 
$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");

$data = array();

while($row = $result->fetch_assoc()){

	array_push($data, $row);
	
}

echo json_encode($data);

?>
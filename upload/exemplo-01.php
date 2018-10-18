<form method="POST" enctype="multipart/form-data">

	<input type="file" name="fileUpload">

	<button type="submit">Send</button>

</form>

<?php

if($_SERVER["REQUEST_METHOD"]==="POST"){

	$file = $_FILES["fileUpload"];

	if($file["error"]){

		throw new Excpetion("Error: ".$file["error"]);

	}

	$dirUploads = "uploads";

	if(!is_dir($dirUploads)){

		mkdir($dirUploads);

	}

	if(move_uploaded_file($file["tmp_name"],$dirUploads.DIRECTORY_SEPARATOR.$file["name"])){ //Move um arquivo do diretório temporário do servidor para outro criado

		echo "Upload realizado com sucesso!";

	} else {

		throw new Excecption("Não foi possível realizar o upload.");

	}

}

?>
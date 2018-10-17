<form>
	
	Nome: <input type="text" name="nome"/><br/>
	Data de Nascimento: <input type="date" name="nascimento"/><br/>
	<input type="submit" name="OK"/><br/>

</form>
<?php

if(isset($_GET)){

	foreach ($_GET as $key => $value) {
		echo "Nome do campo: ".$key."<br/>";

		echo "Valor do campo: ".$value;

		echo "<hr/>";
	}

}

?>
<?php
echo "<pre>";
function ola(){

	$argumentos = func_get_args();

	return $argumentos;

}

var_dump(ola("Bom dia", 10));
echo "</pre>";

?>
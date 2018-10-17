<?php

function ola($texto="Mundo", $periodo="Bom dia"){
//Parametros sem valor padrão sempre a esquerda!

	return "Olá, $texto! $periodo<br/>";

}

echo ola("Mundo");
echo ola("","Boa noite");
echo ola("Glaucio","Boa tarde");
echo ola("João","");

?>
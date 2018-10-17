<?php
/*
	$anoNacimento = 1989;
	$nomeCompleto = "";*/
	//Na linha de baixo temos uma variável com número no nome
	$nome1 = "Gabriel";
	$sobrenome = "Klein";
	$nomeCompleto = $nome1." ".$sobrenome;

	echo $nomeCompleto;

	exit;

	echo "<br/>";

	unset($nome1);

	if(isset($nome1)) {
		echo $nome1;
	}
?>
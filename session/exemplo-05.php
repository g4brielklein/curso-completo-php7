<?php

require_once("config.php");

echo session_save_path();

echo "<br/>";

var_dump(session_status());

echo "<br/>";

switch(session_status()){
	case 0:
	echo "As sessões estão desabilitadas";
	break;

	case 1:
	echo "As sessões estão habilitadas, mas nenhuma existe";
	break;

	case 2: 
	echo "As sessões estão habilitadas";
	break;

	default:
	echo "Inválido!";
	break;
}

?>
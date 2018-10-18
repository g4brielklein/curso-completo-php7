<?php

$file = fopen("teste.txt","w+"); //Cria um arquivo 

fclose($file); //Fecha o arquivo

unlink("teste.txt"); //Apaga o arquivo

echo "Arquivo removido com sucesso!";

?>
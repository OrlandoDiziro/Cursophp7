<?php 

$anoNascimento = 1997;

$nomeCompleto = "Orlando";
/*
Comentario em Bloco
*/
//Na linha abaixo temos uma variável com número no nome
$nome1= "Thiago";

$sobrenome1 = "Garcia";

$nomeCompleto1 = $nome1 . " " . $sobrenome1;

echo $nomeCompleto1;
exit;

echo $nome1;

echo "<br/>";

unset($nome1);

if(isset($nome1)){

	echo $nome1;

}







 ?>
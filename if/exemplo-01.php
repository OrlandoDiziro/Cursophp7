<?php 

$qualIdade = 30;

$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

if ($qualIdade < $idadeCrianca){

	echo "Criança";
} else if ($qualIdade < $idadeMaior) {

	echo "Adolecente";
} else if ($qualIdade < $idadeMelhor){

	echo "Adulto";
} else {

	echo "Idoso";
}

echo "<br>";

echo ($qualIdade < $idadeMaior)?"Menor de idade":"Maior de Idade";

 ?>

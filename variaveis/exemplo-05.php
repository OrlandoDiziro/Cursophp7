<?php 

$nome = "Orlando";

function teste() {

	global $nome;
	echo $nome;
}

function teste2() {
	$nome = "Thiago";
	echo $nome."agora no teste 2";

}

teste();
teste2();

 ?>
<?php 

function ola($texto = "mundo", $periodo = "Bom dia"){

	return "Olá $texto! - $periodo! <br>";


}

echo  ola();
echo  ola("Orlando", "Boa Noite");
echo  ola("Thiago", "Boa Tarde");


 ?>
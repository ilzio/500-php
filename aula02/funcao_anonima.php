<?php  

//funcao anonima porque nao tem nome


$soma = function() {return 2+2;};

//////////////////////////////////////////////////////////////////////////////////////////////
// explicacao use, exemplo 

$msg = "ola";
$func = function($a) use ($msg){ //use pega valor de fora para trabalhar dentro da funcao, 
echo $msg . $a; 
};

var_dump($soma);

echo "<br> <hr> <br>";

$func(" saro");


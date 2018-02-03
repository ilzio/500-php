<?php  

function soma ($a = 0, $b = 0) { //parametro opcional, e para evitar que de erro au usuario omitir um parametro
	return $a + $b;
} 

echo soma(2, 54);


echo "<br> <hr> <br>";

function soma1 (int $a = 0, int $b ) { //parametro opcional, e para evitar que o usuario pasa um parametro errado
	return $a + $b;
} 

echo soma1(0.2, 54);

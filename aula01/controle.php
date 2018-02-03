<?php

$idade = 0;
$temhHabilitacao = false;

//estrutura if simples

if ($idade >= 18) {
	echo "pode dirigir";
} else {
	echo "nda  minchia";
}

echo "<br> <hr> <br>";

//estrutura elseif if


if ($idade >= 18 && $temhHabilitacao) {
	echo "pode dirigir";
} elseif ( $idade >18 &&!$temhHabilitacao) {
	echo "pode dirigir mas tem que se habilitar";
} else
 {
	echo "nda  minchia ta llippari ";
}

// estrutura switch 

echo "<br> <hr> <br>";

switch (true) {
	case ($idade > 18 && $idade < 25):
		echo "joven";
		break;
	case ($idade > 13 && $idade >= 18):
		echo "adolescente";
		break;
	case ($idade > 25):
		echo "adulto";
		break;
	
	default:
		echo "nao sei a idade";
		break;
}
/*

//APROVADO 
   nota >= 7 e frequencia >=8 
//RECUPERACAO 
	nota >=5 e nota < 7 e frecuencia >= 8 

//REPROVADO 
nota <5 ou frequencia < 8


*/

echo "<br> <hr> <br>";

$nota = 7;
$frequencia = 10;
$resultado;


switch (true) {
	case ($nota >= 7 && $frequencia >= 8):
		$resultado = "aprovado!";
		break;
	case ($nota >= 5 && $nota < 7 && $frequencia >= 8):
		$resultado = "recuperacao!";
		break;
	case ($nota < 5 || $frequencia < 8):
		$resultado = "reprovado!";
		break;
	
	default:
		# code...
		break;
}

echo "<p style='font-weight:bold; display:inline; text-align:center;'> Teste de nota: </p> $resultado";

// ternario

echo "<br> <hr> ";
echo "<h3 style='text-align:center;'> ternario: </h3>";
echo "<br>  <br>";

$a = 1;
$b = 2;

if ($a > $b) {
	echo "o valor maio e o $a";
} else {
	echo "o valor maior e $b";
}

echo "<br>  <br>";


echo ($a > $b) ? 'maior e o $a' : 'Maior e o $b';
echo " <br> / nao da certo";



//LOOPS 

//while

$i = 100;

while ($i < 100) {
	echo "o valor e $i";
	echo "<hr>";
	$i++;
}

//dowhile - > executa pelo menos uma vez

echo "<br> <hr> ";
echo "<h3 style='text-align:center;'> dowhile: </h3>";
echo "<br>  <br>";



$i = 10;
do {
	echo $i;
	$i++;
} while ($i <= 10);

//for - > tudo so numa linha de comando

echo "<br> <hr> ";
echo "<h3 style='text-align:center;'> for: </h3>";
echo "<br>  <br>";

 for ($i=0;  $i < 11 ; $i++) { 
	$quadrado = $i * $i;
	echo "o quadrado de $i e $quadrado <br />";
}
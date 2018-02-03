<?php 

echo "<pre>";

echo("<h1 style='color: red; text-align: center;'> Variaveis </h1> <br>");
echo("<h3 style='color: ; text-align: center;'> tipos de variaveis</h3> <br>");
$a = 1;
$b = "carro";
$c = true;
$d = 1.3;
$e = array(10, "sorvete", "200");
$f = NULL;

var_dump($a);
echo "<br>";
var_dump($b);
echo "<br>";
var_dump($c);
echo "<br>";
var_dump($d);
echo "<br>";
var_dump($e);
echo "<br>";
var_dump($f);

echo "<br> <hr> <br>";
echo("<h3 style='color: ; text-align: center;'> Type casting</h3> <br>");
$g = (boolean) $a;
var_dump($g);

echo "<br> <hr> <br>";

echo("<h3 style='color: ; text-align: center;'> variavel variavel </h3> <br>");

$var = "carro";
$$var = "Fusca";
echo $carro;

echo "<br> <hr> <br>";

echo("<h3 style='color: ; text-align: center;'> Constantes </h3> <br>");

define("CONSTANTE", 7);

echo "o valor da constante e " . CONSTANTE;

echo "<br> <hr> <br>";

echo("<h3 style='color: ; text-align: center;'> pessoa </h3> <br>");

$nome = "joao";
$sobrenome = "carvalho";
$idade = 20;
$nacionalidade = "japones";

echo "A pessoa se chama $nome $sobrenome, tem $idade anos, e $nacionalidade";

echo "<br> <hr> <br>";

echo("<h1 style='color: red; text-align: center;'> Operadores </h1> <br>");

echo("<h3 style='color: ; text-align: center;'> aritmeticos </h3> <br>");

$num1 = 10; 
$num2 = 25;
$soma = $num1 + $num2;
echo "a soma de $num1 e $num2 = $soma <br>" ;
echo "$num1 - $num2 = " . ($num1 - $num2) . "<br>";
echo "$num1 * $num2 = " . ($num1 * $num2) . "<br>";
echo "$num1 / $num2 = " . ($num1 / $num2) . "<br>";
echo "$num1 % $num2 = " . ($num1 % $num2) . "<br>";

echo "<br> <hr> <br>";

echo("<h3 style='color: ; text-align: center;'> incremento </h3> <br>");

$num4 = 10;
echo ++$num4;
 echo "<br>";
$num4 += 20;
echo $num4;

echo "<br> <hr> <br>";

echo("<h3 style='color: ; text-align: center;'> incremento </h3> <br>");

echo "Crie uma variavel cont = 0, utilize o operador de incremento até o valor da variavel ser 10 sempre exibindo o valor da variavel; <br> <br>";

$cont = 0;
while ( $cont <= 10) {
	echo "$cont <br>";
	$cont++;
}

echo "<br> <hr> <br>";

echo("<h3 style='color: ; text-align: center;'> decremento </h3> <br>");

echo "Crie uma variavel cont = 100, utilize o operador de decremento até o valor da variavel ser 89 sempre exibindo o valor da variavel <br> <br>";

$cont1 = 100;
while ($cont1 >= 89) {
 	echo "$cont1 <br>";
	$cont1--;
 } 

 echo "<br> <hr> <br>";

echo("<h3 style='color: ; text-align: center;'> relacionais </h3> <br>");

$num5 = 10;
$num6 = 20;


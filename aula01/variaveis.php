<?php 

echo "<pre>";

class Objeto {}

$boolean = true;
$int = 10;
$float = 22.3;
$string = "4linux";
$array = ['a', 20, false, 'ciao'];
$objecto = new Objeto;
$recurso = fopen('ola-mundo.php', 'r');
$null = null;

var_dump($boolean);
echo "<br>";
var_dump($int);
echo "<br>";
var_dump($float);
echo "<br>";
var_dump($string);
echo "<br>";
var_dump($recurso);
echo "<br>";
var_dump($null);
echo "<br>";
var_dump($array);
echo "<br>";


// conversao de tipo variaveis - type casting

$var = 10 ;
var_dump($var);
echo "<br>";
$conver = (boolean) $var;
echo "<br>";
var_dump($conver);

// operadores aritmeticos 

$num1 = 5;
$num2 = 10;

$adicao = $num1 + $num2; 

echo "<hr>";
echo $adicao;
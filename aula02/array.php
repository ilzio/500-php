<?php 

echo "<pre>";

$nome = "lucas";
$sobrenome = "marques";
$idade = 24;
$email = "qualquer@linux.com";

// array definido com ()

$pessoa = array('Lucas' , 'Marques' , 24, 'qualquer@linux.com' );

// echo $pessoa; >> vai dar erro "Array to string conversion"

print_r($pessoa[3]);
echo "<br>";
echo $pessoa[1] . "<br>";
echo $pessoa[2] . "<br>";
echo $pessoa[3] . "<br>";

//usar o for para percorrer o array

for ($i=0; $i < 4 ; $i++) { 
	echo $pessoa[$i] . "<br>";
}

//array definido com cochetes 
$pessoa2 = ['saro' , 'pitinga' , 54, 'saro@linux.com',];

$pessoa2[] = "bellie"; //adicionar valor no final do array
var_dump($pessoa2);
echo "<br> <hr> <br>";
for ($i=0; $i <= 4 ; $i++) { 
	echo $pessoa2[$i] . "<br>";
}







<?php  

// arrays dentro de arrays

echo "<pre>"; 
$temperaturas = [
	'2008' => [
			'Janeiro' => 32,
			'Fevereiro' => 31
			],
'2009' => [
			'Janeiro' => 30,
			'Fevereiro' => 29
			],
'2010' => [
			'Janeiro' => 25,
			'Fevereiro' => 42
			],

];

print_r($temperaturas);

echo "<br> <hr> <br>";

// pode dar nome para indice e valores, para o codigo ser mas facil de leer, incluir foreach dentro de outros foreach apostila pagina 39

foreach ($temperaturas as $ano => $meses) {
	echo "<strong>$ano </strong>:  <br>";
foreach ($meses as $mes => $temp) {
	echo "$mes: $temp   <br>";
	
	
}
}

echo "<br>";
echo $temperaturas['2010']['Fevereiro'];

echo "<br>"; 


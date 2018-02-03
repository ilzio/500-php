<?php 

//specificar nome do indice -> ARRAY ASSOCIATIVO

$pessoa = [
	'nome' => 'Lucas',
	'sobrenome'=> 'marques',
	'idade' => 24,
	'email' => 'Lucas@lucas.com', 

];

print_r($pessoa);

echo "<br> <hr> <br>";


echo $pessoa['nome'] . "<br>";
echo $pessoa['sobrenome'] . "<br>";
echo $pessoa['idade'] . "<br>";
echo $pessoa['email'] . "<br>";

//o for normal so funciona com numero, precisa foreach, $key e $value sao automaticas

foreach ($pessoa as $key => $value) {
	echo $key . ' --> ' . $value . '<br>';
}

// para ser mais rapido, so pode usar quando o array nao e complexo 

foreach ($pessoa as $valores ) {
	echo $valores . '<br>';
}
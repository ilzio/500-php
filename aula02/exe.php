<?php  

//receve um numero e retorna se par ou impar

function par($num) {
	if ($num %2 == 0) {
		echo "o numero e par";
	} else {
		echo "o numero e impar";
	}
}

//recebe 2 numeros retorna o maior

echo par(1);

echo "<br> <hr>";

function maior($num1, $num2) {
	if ($num1 > $num2) {
		echo "$num1 e maior que $num2";
	} else {
		echo "$num2 e maior que $num1";
	}
}

echo maior(3, 7);

echo "<br> <hr>";

//recebe array [nome, idade] retorna se a pessoa e maior de idade

$pessoa = [
			'nome' => 'cammelo',
			'idade' => 25,
			'temhabilitacao' => true
			 ];


function idade($pessoa) {
if ($pessoa['idade'] >= 18 ) {
 	echo "$pessoa[nome] e maior de idade";
 } else {
 	echo "$pessoa[nome] nao e maiod de idade ";
 }
}

idade($pessoa);
 
echo "<br> <hr>";

//recebe array [nome, idade, temhabilitacao(boolean)] retorna se podedirigir



function dirigir($pessoa) {
if ($pessoa['idade'] >= 18 && $pessoa['temhabilitacao'] == true ) { //nao precisa colocar == true porque && ja quer que os dois sejam verdadeiros
 	echo "$pessoa[nome] pode dirigir";
 } elseif ($pessoa['idade'] >= 18 && $pessoa['temhabilitacao'] == false ) {
 	echo "$pessoa[nome] pode dirigir mas tem que se habilitar";
 }  else {
 	echo "$pessoa[nome] nao e pode dirigir ";
 } }

 dirigir($pessoa);
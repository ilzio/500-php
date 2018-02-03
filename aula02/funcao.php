<?php 

echo "<pre>";

function ola(){
	return "ola funcao <br>"; //return nao imprime na tela, so vai pegar uma informacao e retornar otra
}

ola(); //chamar funcao 

for ($i=0; $i <  5; $i++) { 
	ola();
}
echo ola();


function soma(){
	return 2 + 3;
}

echo soma();

echo "<br><hr>";

//passando parametros

function soma2($a, $b){ //parametros da funcao
	$soma = $a + $b;
	return "o resultado e $soma ";
}

echo soma2(5, 6);


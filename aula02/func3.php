<?php  

//variavel global

$pessoa = ['nome', 'idade' =>24 ];

function exibeNome(){ 
	global $pessoa;
	$pessoa['idade'] = 32;
	return $pessoa['idade'];
}   

echo exibeNome();
echo $pessoa['idade'];

echo "<br> <hr> <br>";


$num = 0;

function add(&$num){ 
 $num++;
} 

add($num);

echo $num;
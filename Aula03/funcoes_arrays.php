<?php  

echo "<pre>";

// FUNCOES PARA MANIPULACAO DE ARRAY


												//ORDENACAO 

//explode = separa palavras de uma string ( separado por um caracter determinado DELIMITER) e torna elas em elementos de um array,

//explode(delimiter, string)

$data = "27/01/2018";



var_dump(explode('/', $data));

//implode = junta palavras de uma string  e torna elas em elementos de um array ( separado por um caracter determinado GLUE),

// implode(glue, pieces)

$arrData = explode("/", $data);
var_dump(implode("-", $arrData));

// ordenacao de array (apostila 79 tabela com todas as funcoes de ordenacao de arrays)

// ordena array (menor -> menor) mantendo associacao entre indice e conteudo, ver exemplos abaixo

$array = ['a', 'c', 'f', 'd', 'e'];

print_r($array);

echo "<br>";
asort($array); // ordena pelo valor maior -> menor

print_r($array);

echo '<br> <hr> <br>';

// ordena array (menor -> menor) mantendo associacao entre indice e conteudo, ver exemplo abaixo

$array = ['a' => 0, 'c' => 2, 'f' => 4, 'd'=> 3, 'e' => 1];

print_r($array);

echo "<br>";
ksort($array); // ordena por chave maior -> menor
print_r($array);


echo '<br> <hr> <br>';

$nomes = ['Lucas', 
		'Cammelo',
		'zzarazzio',
		'fulippo'];

sort($nomes); //ordena ordem alfab/numerico

print_r($nomes);

echo '<br> <hr> <br>';


													//MAPEAMENTO 

function cubo($num) {
	return $num*$num*$num;
}


$nums = [1, 2, 4];

// manera de fazer seria essa

foreach ($nums as $numero) { 
	echo cubo($numero);
	echo "<br>";
}

// funcao array_map faz direto, mas facil 

// array_map(callback, arr1)

$cubo = array_map('cubo', $nums);

print_r($cubo);

$quadrado = array_map(function ($snum) {return $nums*$nums;}, $nums); // nao funciona mas e exemplo de uma funcao anonima 																			usando o arraymap -> tem que utilizar parametro "use" 																		para especificar que se esta usando uma variavel de 																			fora de funcao
 
print_r($quadrado);


echo '<br> <hr> <br>';


/* arrayfilter 

$vetor = [1,2,3,4];

//retornar so os numeros pares


function par($num) use $numero{
	return ($num % 2 == 0) ? $num : ""; 
}

function par($num){
	return ($num % 2 != 0) ? $num : ""; 
}


echo "pares: <br>";

print_r(arrayfilter($vetor, par()));

echo "impares: <br>";

print_r(arrayfilter($vetor, impar()))

*/

//array chunk divide array en arrays segundo o parametro 

$array = ['a', 'b', 'c', 'd', 'e'];
print_r(array_chunk($array, 2));

// array combine, combina dois arrais, criando chaves e valores

$chaves = [ 1,2,3];
$valores = ['a', 'b', 'c'];

$array = array_combine($chaves, $valores);
print_r($array);

echo '<br> <hr> <br>';

// array diff diferencia entre arrays, retorna a diferencia


$arr1 = ['a', 'b', 'c'];
$arr2 = [ 'b', 'a'];
$diff = array_diff($arr1, $arr2);
print_r($diff);

// tem mas opcoes para comparar so indices, valores

// array merge 

echo '<br> <hr> <br>';

$arr1 = [ 'cor' => 'verde', 
		  'nome' => 'Joao',
		  '0' => 2,
		  '1' => 5];

$arr2 = ['nome' => 'saro', 10];

$merge = array_merge($arr1,$arr2);

print_r($merge);


echo '<br> <hr> <br>';


$pessoa = [ 'nome' => 'Joao',
		  'idade' => 11,
		  ];

if (array_key_exists('sobrenome', $pessoa)) { // verifica existencia de chave
	echo 'ok';
}

echo '<br> <hr> <br>';


$chave = array_search('Joao', $pessoa);

echo $chave;

echo '<br> <hr> <br>';
echo '<br> <hr> <br>';

if (in_array(11, $pessoa)) { // procura valor
	echo "encontrou";
}

echo '<br> <hr> <br>';

// array unique, remove conteudo duplicado independentemente da chave, remove. CUIDADO 

$arr = [ 1,2,3, 3, 4, 1, 1, 2, 3, 4];

$unico = array_unique($arr);
print_r($unico);

echo '<br> <hr> <br>';
echo '<br> <hr> <br>';
echo '<br> <hr> <br>';


// array_keys(input) retorna as chaves de um array associativo

// array_push(array, var) -> adicionar alguma coisa no final de um array

echo count($array);

echo '<br> <hr> <br>';


// uma manera de fazer e o foreach

foreach ($arr as $num ) {
	echo $num;
}

echo '<br> <hr> <br>';


for ($i=0; $i < count($arr); $i++) { // usa count para saber quantos elementos num array
	echo $arr[$i];
}

echo '<br> <hr> <br>';


//serialize transforma array em string

$arr = [ 'luke', 
		 'leia', 
		 'han solo', 
		 ['vader', 'kilo ren']
		 ];


$string = (serialize($arr)); // nao funciona mas nao serves

var_dump($string);

echo $string;
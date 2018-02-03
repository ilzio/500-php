<?php  

echo '<pre>';

// empty -> verifuca se a variavel ta vazia, si ta retorna true. 

var_dump(empty(0)); // -> tipagem e conteudo da variavel, util para debug
var_dump(empty('0'));

$nome = '';

if (!empty ($nome)) {
	echo $nome;
} else {
	echo "preenche o nome";

}

//isset -> se a variavel existe

$pessoa = ['nome' => 'Fernando'];

var_dump(isset($pessoa['idade'])); // da falso porque o indice idade nao existe

// TIPAGEM 

$num = 1;

var_dump(is_int($num)); // verifica se e do tipo integer, tem is_bool, is_numeric, is_string.... 

//UNSET 

echo "<hr>";

$selecao = 'Brasil';

var_dump(isset($selecao)); 

unset($selecao); // -> destrucao da variavel, para fechar sessao, por exemplo

var_dump(isset($selecao));


<?php
require_once 'conexao.php';
$usuario = 'Jose alvo';
$senha = '4linux';
$id = '3';

// usuario esta entre aspas porque e um texto, as {} e para melhor formatacao

$query = "UPDATE usuarios SET usuario = '{$usuario}' WHERE id = {$id}";
echo $query;

 //mandar query para o banco de dados, pg_que
$result = pg_query($conexao,$query);

var_dump($result);

?>

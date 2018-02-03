<?php
require_once 'conexao.php'
$usuario = '4linux';
$senha = '4linux';



$query = "INSERT INTO usuarios(usuario,senha) VALUES('{$usuario}', '{$senha}')";

echo $query;

//mandar query para o banco de dados, pg_que
$result = pg_query($conexao,$query);

var_dump($result);



?>

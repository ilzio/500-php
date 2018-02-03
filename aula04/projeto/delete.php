<?php
require_once 'conexao.php';
$id = 5;



$query = "DELETE FROM usuarios WHERE id = {$id}";

echo $query;

//mandar query para o banco de dados, pg_que
$result = pg_query($conexao,$query);

var_dump($result);



?>

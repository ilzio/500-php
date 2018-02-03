<?php
require_once 'conexao.php';

// manda a requisicao

$query= 'SELECT * FROM usuarios';
$result= pg_query($query);

// importa os datos em forma de array


$array = pg_fetch_all($result);
echo "<pre>";
var_dump($array);


 ?>

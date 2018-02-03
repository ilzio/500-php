<?php

// criar conexao com o banco - postgre [precisa de aplicativo que gerencia a conexao entre o posgre e o PHP]
    //definir variaveis

    $host = 'localhost';
    $port = '5432';
    $dbname = 'aula04';
    $user = 'developer';
    $pass = '4linux';

    //definir conexao, segum os parametros postgre

$conexao_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$pass}";

$conexao = pg_connect($conexao_string);

function conecta(){
  global $conexao_string;
  return pg_connect($conexao_string);
}
function desconecta(){
  pg_close($conexao);
}


var_dump($conexao);

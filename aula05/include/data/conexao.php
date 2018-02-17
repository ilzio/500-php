<?php


// este arquivo so contem a conexao com a base de dados, aqui os parametros de conexao

    $host = 'localhost';
    $port = '5432';
    $dbname = 'dexterescola';
    $user = 'developer';
    $pass = '4linux';

//definir conexao, segum os parametros postgre

$conexao_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$pass}";

// var_dump($conexao);

function conecta(){
  global $conexao_string;
  return pg_connect($conexao_string);
}

// parametro $con e so interno a funcao, qualquer variavel pode ser atribuida a ele, no projeto vamos inserir $con = conecta();
function desconecta($con){
  pg_close($con);
}


 ?>

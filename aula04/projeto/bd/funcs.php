<?php

require_once 'conexao.php';

function inserirUsuario (array $dados){
insert into usuarios (id, usuario,senha) values ('joao','linux');

$con = conecta();
$query = '';
pg_query($con,$query);
desconecta($con);

}

function atualizarUsuario (array $dados,int $id){
  $con = conecta();
  $query = '';
  pg_query($con,$query);
  desconecta($con);

};


function deletarUsuario (int $id){
  $con = conecta();
  $query = '';
  pg_query($con,$query);
  desconecta($con);
};


function listarUsuarios (){
  $con = conecta();
  $query = '';
  $result = pg_query($con,$query);
  $found = pg_fetch_all($result);
  desconecta($con)
  return $found;
};

function buscarUsuarios (int $id){
  $con = conecta();
  	$query = "";
  	$result = pg_query($con,$query);
  	$found = pg_fetch_all($result);
  	desconeta($con);
  	return $found;
};

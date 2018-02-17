<?php

include_once 'conexao.php' ;

//funcao que insere um curso
function insereCurso(array $curso){
      $con = conecta();

      $sql = "INSERT INTO tb_cursos(nome,tipo,carga_horaria,requisitos) VALUES ('{$curso['nome']}','{$curso['tipo']}','{$curso['carga_horaria']}','{$curso['requisitos']}')";

      // echo $sql;

      pg_query($sql);

      desconecta($con);

}
// funcao que lista os cursos existentes
function listaCursos(){

      $con = conecta();

      $sql = "SELECT * FROM tb_cursos ORDER BY nome;";

      $result = pg_query($sql);

      $cursos = pg_fetch_all($result);

      desconecta($con);
      return $cursos;
}

function listaCursosPorId($id){

      $con = conecta();

      $sql = "SELECT * FROM tb_cursos WHERE id= {$id};";

      $result = pg_query($sql);

      $cursos = pg_fetch_assoc($result);

      desconecta($con);
      return $cursos;
}


//criando um curso so para preencher a base de dados

$php = [
  'nome' => 'desenvolvimento Web com php',
  'tipo' =>  'presencial',
  'carga_horaria' => 40,
  'requisitos' => 'o aluno deve ter conhecimento previo de HTML basico',
];

$css = [
  'nome' => 'desenvolvimento Web com css',
  'tipo' =>  'EAD',
  'carga_horaria' => 40,
  'requisitos' => 'o aluno deve ter conhecimento previo de requisicoes HTML',
];

function atualizarCurso(int $id, array $curso){
  $con = conecta();

    $sql = "UPDATE tb_cursos SET nome = '{$curso['nome']}',tipo ='{$curso['tipo']}',carga_horaria ='{$curso['carga_horaria']}',requisitos='{$curso['requisitos']}' WHERE ID = {$id}";
pg_query($sql);
desconecta($con);
return $cursos;
}
function deletarCurso(int $id){
  $con = conecta();

    $sql = "DELETE FROM tb_cursos WHERE id = {$id}";
pg_query($sql);
desconecta($con);

}


// chamando as funcoes para inserir os cursos teste
// insereCurso($php);
// insereCurso($css);


// print_r(listaCursosPorId(1));
// print_r(listaCursos());

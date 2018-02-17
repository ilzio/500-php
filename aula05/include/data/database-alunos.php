<?php

include_once 'conexao.php' ;

//funcao que insere um curso
function insereAluno(array $aluno){
      $con = conecta();

      $sql = "INSERT INTO tb_alunos(nome,email,senha,cpf,rg,dt_nasc) VALUES ('{$aluno['nome']}','{$aluno['email']}','{$aluno['senha']}','{$aluno['cpf']}','{$aluno['rg']}','{$aluno['dt_nasc']}')";

      // echo $sql;

      pg_query($sql);

      desconecta($con);

}
// funcao que lista os alunos existentes
function listaAlunos(){

      $con = conecta();

      $sql = "SELECT * FROM tb_alunos ORDER BY nome;";

      $result = pg_query($sql);

      $alunos = pg_fetch_all($result);

      desconecta($con);
      return $alunos;
}



//criando um aluno so para preencher a base de dados

$jose = [
  'nome' => 'Jose Suarez',
  'email' =>  'Josesuarez@4linux.com.br',
  'senha' =>  '123',
  'cpf' =>  '12345678901',
  'rg' => '123456',
  'dt_nasc' => '20/09/1985',
];

$maria = [
  'nome' => 'Maria Suarez',
  'email' =>  'mariasuarez@4linux.com.br',
  'senha' =>  '123',
  'cpf' =>  '12345678902',
  'rg' => '123459',
  'dt_nasc' => '15/08/1980',
];



function atualizarAluno(int $id, array $aluno){
  $con = conecta();

    $sql = "UPDATE tb_alunos SET nome = '{$aluno['nome']}',email ='{$aluno['email']}',senha ='{$aluno['senha']}',cpf='{$aluno['cpf']}',rg ='{$aluno['rg']}',dt_nasc ='{$aluno['dt_nasc']}' WHERE ID = {$id}";
pg_query($sql);
desconecta($con);
return $alunos;
}
function deletarAluno(int $id){
  $con = conecta();

    $sql = "DELETE FROM tb_alunos WHERE id = {$id}";
pg_query($sql);
desconecta($con);

}


// chamando as funcoes para inserir os alunos teste
// insereAluno($jose);
// insereAluno($maria);



// print_r(listaAlunos());

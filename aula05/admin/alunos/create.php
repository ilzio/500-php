<?php
include_once '../../include/data/database-alunos.php';
$request = filter_input(INPUT_SERVER, 'REQUEST_METHOD');

if ($request === 'POST'){


        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRIPPED);
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $senha = filter_input(INPUT_POST, 'senha');
        $cpf = filter_input(INPUT_POST, 'cpf', FILTER_VALIDATE_INT);
        $rg = filter_input(INPUT_POST, 'rg', FILTER_VALIDATE_INT);
        $dt_nasc = filter_input(INPUT_POST, 'id');
        // $id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
        $novo = filter_input(INPUT_POST, 'novo', FILTER_VALIDATE_BOOLEAN);

        $aluno = [

              'nome' => $nome,
              'email' => $email,
              'senha' => $senha,
              'cpf' => $cpf,
              'dt_nasc' => $dt_nasc,
          ];
  insereAluno($aluno);
  //   if ($novo) {
  //   insereAluno($aluno);
  // } else {
  //   atualizarAluno($id, $aluno);
  // }
  header("Location:index.php");


}

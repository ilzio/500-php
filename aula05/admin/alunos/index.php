<?php include_once '../layout/_topo.php'; ?>
<?php include_once '../../include/data/database-alunos.php'; ?>

<div class="container">
  <div class="page-header">
  <h2> Alumnos </h2>
  </div>
</div>

<table class="table table-striped">
  <thead>
    <tr>
      <th>#</th>
      <th>Nome</th>
      <th>Email</th>
      <th>Senha</th>
      <th>CPF</th>
      <th>RG</th>
      <th>Data Nascimento</th>
    </tr>
  </thead>

  <tbody>

    <?php if(listaAlunos()) :  ?>
      <?php foreach (listaAlunos() as $aluno) : ?>
        <tr>
          <th><?= $aluno['id'] ?></th>
          <td><?= $aluno['nome'] ?></td>
          <td><?= $aluno['email'] ?></td>
          <td><?= $aluno['senha'] ?></td>
          <td><?= $aluno['cpf'] ?></td>
          <td><?= $aluno['rg'] ?></td>
          <td><?= $aluno['dt_nasc'] ?></td>
          <td>
            <a href="edit.php?id=<?= $aluno['id'];?>" class="btn btn-info">Alterar </a>
            <form class="" action="delete.php" method="POST">
              <input type="hidden" name="id" value="<?= $aluno['id'];?>">
              <button type="submit" name="button" class="btn btn-danger">Excluir</button>

            </form>
          </td>
        </tr>
      <?php endforeach; ?>
        <?php endif; ?>
  </tbody>
</table>

<div class="pull-right">
  <a class="btn btn-primary" href="new.php">Novo Aluno</a>
</div>
<?php include_once '../layout/_rodape.php';  ?>

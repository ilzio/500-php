<?php include_once '../layout/_topo.php'; ?>
<?php include_once '../../include/data/database-cursos.php'; ?>
<div class="container">
  <div class="page-header">
  <h2> Cursos </h2>

</div>
</div>

<table class="table table-striped">
  <thead>
    <tr>
      <th>#</th>
      <th>Curso</th>
      <th>Tipo</th>
      <th>Carga Horaria</th>
      <th>Requisitos</th>
      <th>Acoes</th>
    </tr>
  </thead>
  <tbody>
    <!-- verifica se listaCursos existe, dois pontos quer diser que expressao vai continuar, nesse caso acaba no endforeach e no endif -->
    <?php if(listaCursos()) :  ?>
      <!-- <?php var_dump(listaCursos())?> -->
      <?php foreach (listaCursos() as $curso) : ?>
        <tr>
          <th><?= $curso['id'] ?></th>
          <td><?= $curso['nome'] ?></td>
          <td><?= $curso['tipo'] ?></td>
          <td><?= $curso['carga_horaria'] ?></td>
          <td><?= $curso['requisitos'] ?></td>
          <td>
            <a href="edit.php?id=<?= $curso['id'];?>" class="btn btn-info">Alterar </a>
            <form class="" action="delete.php" method="POST">
              <input type="hidden" name="id" value="<?= $curso['id'];?>">
              <button type="submit" name="button" class="btn btn-danger">Excluir</button>

            </form>
          </td>
        </tr>
      <?php endforeach; ?>
        <?php endif; ?>
  </tbody>
</table>

<div class="pull-right">
  <a class="btn btn-primary" href="new.php">Novo Curso</a>
</div>

<?php include_once '../layout/_rodape.php';  ?>

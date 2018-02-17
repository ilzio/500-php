

<?php include_once '../layout/_topo.php'; ?>
<?php include_once '../../include/data/database-cursos.php'; ?>

<?php $aluno = listaAlunosPorId($_GET['id'])?>


<div class="container">
  <div class="page-header">
    <h2> Editando Aluno </h2>
  </div>

  <form class="" action="create.php" method="POST">
    <input type="hidden" name="id" value="<?= $aluno['id'] ?>">
    <div class="form-group">
      <label for="curso">Curso</label>
      <input type="text" name="nome" class="form-control" value="<?= $curso['nome'] ?>" required>
    </div>
    <div class="form-group">
        <label for="tipo">Tipo do curso</label>
        <select name="tipo" class="form-control">
         <?php $tiposCurso = ['EAD' => 'EAD', 'Presencial' => 'Presencial'] ?>
         <?php foreach ($tiposCurso as $key => $value) : ?>

           <?php
           $selected = '';
           if ($curso['tipo'] === $key) {
             $selected = 'selected';
           } ?>
           <option value="<?= $key?>" <?= $selected ?>><?= $value ?> </option>
           <?php endforeach?>
        </select>
  </div>
  <div class="form-group">
    <label for="carga_horaria">Carga Horaria</label>
      <input type="number" minlenght="0" name="carga_horaria" class="form-control" value="<?= $curso['carga_horaria'] ?>">
  </div>
  <div class="form-group">
<label for="requisitos">Requisitos</label>
<textarea name="requisitos" class="form-control" cols="30" rows="5"><?= $curso['requisitos'] ?></textarea>
  </div>
  <a href="index.php" class="btn btn-warning">Voltar</a>
  <button type="submit" class="btn" name="button">Salvar</button>
</form>
</div>



<?php include_once '../layout/_rodape.php';  ?>

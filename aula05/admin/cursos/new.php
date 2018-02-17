<?php include_once '../layout/_topo.php'; ?>
<?php include_once '../../include/data/database-cursos.php'; ?>

<div class="container">
  <div class="page-header">
    <h2> Novo curso </h2>
  </div>

  <form class="" action="create.php" method="POST">
    <div class="form-group">
      <label for="curso">Curso</label>
      <input type="text" name="nome" class="form-control" placeholder="Curso" required>
    </div>
    <div class="form-group">
        <label for="tipo">Tipo do curso</label>
        <select name="tipo" class="form-control">
        <option value="EAD">EAD</option>
        <option value="Presencial" selected>Presencial</option></select>
  </div>
  <div class="form-group">
    <label for="carga_horaria">Carga Horaria</label>
      <input type="number" minlenght="0" name="carga_horaria" class="form-control" value="0">
  </div>
  <div class="form-group">
<label for="requisitos">Requisitos</label>
<textarea name="requisitos" class="form-control" cols="30" rows="5"></textarea>
  </div>
  <a href="index.php" class="btn btn-warning">Voltar</a>
  <button type="submit" class="btn" name="button">Cadastrar</button>
</form>
</div>






<?php include_once '../layout/_rodape.php';  ?>

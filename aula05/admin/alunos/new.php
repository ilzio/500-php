<?php include_once '../layout/_topo.php'; ?>
<?php include_once '../../include/data/database-alunos.php'; ?>

<div class="container">
  <div class="page-header">
    <h2> Novo Aluno </h2>
  </div>

  <form class="" action="create.php" method="POST">
    <div class="form-group">
      <label for="nome">Nome</label>
      <input type="text" name="nome" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input name="email" class="form-control" type="email">
        </div>
  <div class="form-group">
    <label for="senha">Senha</label>
      <input type="password"  name="senha" class="form-control" >
  </div>
  <div class="form-group">
<label for="cpf">CPF</label>
<input type="number" name="cpf" class="form-control" required>
  </div>
  <div class="form-group">
<label for="rg">RG</label>
<input type="number" name="rg" class="form-control">
  </div>
  <div class="form-group">
<label for="dt_nasc">Data Nascimento</label>
<input type="date" name="dt_nasc" class="form-control" required>
  </div>
  <a href="index.php" class="btn btn-warning">Voltar</a>
  <button type="submit" class="btn" name="button">Cadastrar</button>
</form>
</div>






<?php include_once '../layout/_rodape.php';  ?>

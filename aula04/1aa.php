<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title></title>
</head>

<body>
<form class="" action="#" method="post">
  <label>nome</label>
  <input type="text" name="nome">
  <label>sobrenome</label>
  <input type="text" name="sobrenome">
  <input type="submit" name="enviar" value="enviar">

</form>
</body>

</html>

<style>
.input {
  display: block;
}

</style>

<?php


var_dump($_POST);

if (!empty($_POST)) {
  $nome= $_POST['nome'];
  $sobreNome= $_POST['sobrenome'];
echo "o nome do cara e $nome $sobreNome" ;
}
?>

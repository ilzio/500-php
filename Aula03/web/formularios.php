<!DOCTYPE html>
<html>
<head>
	<title>Formulario</title>
</head>
<body>

	<pre>
	<h1> Meu formulario </h1>



	<form action="#" method="post">
		<label>Nome: </label>
		<input type="text" name="nome" placeholder="Escreba seu nome">

		<label>Email: </label>
		<input type="email" name="email" required>
		<label>Senha: </label>
		<input type="password" name="senha" required>

		<input type="submit" value="Enviar" >

	</form>

	<?php

if (!empty($_POST)) {
	print_r($_POST);
}

if (!empty($_GET)) {
	print_r($_GET);
}


// echo "<pre><br>";
// 	var_dump($_POST); // esta mostrando na tela o conteudo da variavel global post

	 ?>
</body>
</html>

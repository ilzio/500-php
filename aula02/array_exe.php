<?php  

//foreach complexos

echo "<pre>";

$pessoas = [ 
		[
			'nome' => 'Joao',
			'sobrenome' => 'Mendes',
			'idade' => 29,
			'peso' => 81,
		],

		[
			'nome' => 'Celia',
			'sobrenome' => 'Martinez',
			'idade' => 12,
			'peso' => 35,
		],
		[
			'nome' => 'Ze',
			'sobrenome' => 'Suares',
			'idade' => 42,
			'peso' => 90,
		],

	];
print_r($pessoas);


	//Exibir nome completo de cada pessoa 

	echo "<br> <hr> <br>";
echo "<strong>Nome completo de todos: </strong> <br>";
		foreach ($pessoas as $pessoa) {
			print_r($pessoa);
			echo $pessoa['nome'] . " ". $pessoa['sobrenome'] . "<br>";

};
	//Exibir idade de cada pessoa 

	//Exibir nome completo de cada pessoa maior de idade
echo "<strong>com idade maior de 18 anos : </strong> <br>";
foreach ($pessoas as $pessoa) {
			if ($pessoa['idade'] >= 18) {
				echo "$pessoa[nome] $pessoa[sobrenome]  "; 
}};
echo "<br>";
	//Exibir nome completo e idade de cada pessoa com peso maior de 80 quilos  
echo "<strong>com peso maior de 80 quilos: </strong> <br>";
foreach ($pessoas as $pessoa) {
			if ($pessoa['peso'] > 80) {
			echo "$pessoa[nome] $pessoa[sobrenome], $pessoa[idade] "; //dentro de aspas duplas nao precisa colocar indice dentro de aspas
}};


<?php 


// para manipular conteudo de strings

$artilheiro = 'Ronaldo';
$gols = 9;

$texto = 'O artilheiro do campeonato, %s tem %d gols'; //%s string, %d inteiro

sprintf($texto, $artilheiro, $gols); // imprime texto formatado, seguindo regras de porcentagem com conteudo



echo '<br> <hr> <br>';

$msg = sprintf($texto,$artilheiro,$gols);

echo $msg;


echo '<br> <hr> <br>';

// str_replace(search, replace, subject) -> manera de substituir: o que, com que, aonde

$texto = 'ola mundo';

echo str_replace('ola', 'tchau', $texto);

echo '<br> <hr> <br>';




$pessoa = ['nome' => 'Maria',
			'sexo' => 'f'];

$msg = "ola menino $pessoa[nome]"; 


			if ($pessoa['sexo'] == 'f'){
				$msg = str_replace('menino', 'menina', $msg); // importante specificare di nuovo che si modifica il contenuto 												della var msg prima di fare l echo
			}

echo $msg; 

echo '<br> <hr> <br>';

$string = '      PHP     ';

var_dump($string);
var_dump(trim($string));  //elimina espacos em branco

echo '<br> <hr> <br>';

$string = "ola mundo";

echo ucfirst($string); // primeiro maiusculo

echo '<br>';

echo ucwords($string); // cada palavra a primeira letra em maiuscula

echo '<br>';

$string = "OLA mundo";

echo lcfirst($string); // primera minusculo

echo '<br> <hr> <br>';

$email = "linux@qualquer.com";

// strstr(haystack, needle)

$dominio = strstr($email, '@'); // armazena o que vem depois do caracter especificado

echo $dominio;

echo '<br>';

$user = strstr($email, '@', true); // armazena o que vem antes do caracter especificado 

echo $user; 

echo '<br> <hr> <br>';

$string = 'ola mundo como vai    ';

echo strlen($string) . ' caracteres com espacos em branco'; // total de caracteres, inclui caracteres em branco, para eliminar espacos em branco:

echo '<br> ';


echo strlen(trim($string)) . ' caracteres sem espacos em branco'; // funcao dentro de funcao, caracteres sem espacos em branco

echo '<br> <hr> <br>';

$string = '123456789';

$procurar = '5';

$posicao = strpos($string, $procurar); // procura posicao de um caracter, se nao encontrar vai dar falso;

// strpos(haystack, needle)

var_dump($posicao); // lembrando que a primeira posicao e sempre 0!!!

echo '<br> <hr> <br>';

$string = '123456789';

echo substr($string, 2, -3); // corta string a partir de uma posicao (2 e vai atras de -3 caracteres)

$quantidade = strlen($string) - 2; // in questo caso ha usato la funzione strlenght per ottenere lunghezza della string

echo substr($string, 2, -$quantidade); // esempio bestia
 

echo '<br> <hr> <br>';

$string = 'hoje eu acordei cedo';


// pega uma parte de string e substitui, parametros -> substr_replace(string, replacement, start)

echo substr_replace($string, 'tarde', -9, -1); 

echo '<br> <hr> <br>';

$string = 'hoje eu acordei cedo';

echo strtoupper($string); // passa tudo para maiusculo
echo '<br>';
echo strtolower($string); // passa tudo para minusculo

$string = "JOSE MARIA";

echo '<br>';


echo ucwords(strtolower($string));



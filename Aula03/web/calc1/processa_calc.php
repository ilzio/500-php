<?php

// print_r($_POST);

// funcao que soma e exiba o resultado na imageinterlace

//capturando a request

// $request = filter_input(INPUT_SERVER, 'REQUEST_METHOD');
// if ($request === 'POST') {
//   $num1 = filter_input(INPUT_POST, 'num1');
//   $num2 = filter_input(INPUT_POST, 'num2');
// }

if (!empty($_POST)) {


$num1= (int) $_POST['num1'];
$num2= (int) $_POST['num2'];

var_dump($_POST);

if (empty($num1) || empty($num2)) {
    echo "falta um numero, impossivel continuar ";
    die();
  }
     elseif (!is_int($num1) || !is_int($num2)) {
  echo "um ou mais caracteres informados devem ser numeros, impossivel continuar ";
  die();
}
else {
  echo "o primeiro numero e' $num1, o segundo $num2";
  echo "<br><hr><br>";
}



function soma($a, $b) {
  if (empty($a) || empty($b)) {

  } else {
    return $a + $b;
  }

}

function multiplica($a, $b) {
  return $a * $b;
}

function divide($a, $b) {
  if ($a == 0 ||  $b == 0) {
    echo "nao pode dividir por 0";
  } else {
    return $a / $b;
  }

}

echo "a soma de $num1 e $num2 e " . soma($num1, $num2) . "<br> <hr>";
echo "a multiplicacao de $num1 e $num2 e " . multiplica($num1, $num2) . "<br> <hr>";
echo "a divisao entre $num1 e $num2 e " . divide($num1, $num2) . "<br> <hr>";


// {
//
// }

// funcao que substraia e exiba o resultado la tela
// funcao que divida e exiba o resultado na tela
// proibido divisao por zero
// funcao que ultiplique e exiba o resultado na imageinterlace
// cada funcao vai receber dois numeros como parametros
// validacao
  // deve ser numero inteiro
  // nao permita numero em branco
} else {
  die();
}

<?php

if (!empty($_POST)) {

  $peso= (float) $_POST['peso'];
  $altura= (float) $_POST['altura'];




function indice($a, $b)
{
  $IMC= $a / ($b * $b);
  return $IMC;
}

$indicefinal = indice($peso, $altura);
  if ($indicefinal < 17) {
    echo "Muito abaixo do peso";
  } elseif ($indicefinal >= 17 &&  $indicefinal <= 18.49) {
    echo "Abaixo do peso";
  } elseif ($indicefinal >= 18.5 && $indicefinal <= 24.99) {
    echo "Peso normal";
  } elseif ($indicefinal >= 25 && $indicefinal <= 29.99) {
    echo "Acima do peso";
  } elseif ($indicefinal >= 30 && $indicefinal <= 34.99) {
    echo "Obesidade I ";
  } elseif ($indicefinal >= 35 && $indicefinal <= 39.99) {
    echo "Obesidade II (severa)";
  }else {
    echo "Obesidade III (morbida)";
  }



}

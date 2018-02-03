<?php 

$carro = "fusca";
$nome = "Saro";
$sobrenome = "pitinga";
$var = <<<'DOC'
<pre>
 O $nome não conseguiu localizar www.$sobrenome.com.

     
    Verifique se há erro de digitação no endereço tais como  ww.example.com em vez de  www.example.com
     
    Se não conseguir carregar qualquer página, verifique a conexão de rede  do seu $carro.
     
    Se o seu computador ou rede estão protegidos por uma firewall ou um proxy, verifique se o Firefox tem permissão de acesso à Web."

DOC;

echo $var;


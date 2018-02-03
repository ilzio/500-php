<?php 

//funcao mail, vai dar merda, cai no espam 

// criptografia para armazenar senhas no banco 

$senha = '123';

print_r(md5($senha)); // problema, todas as senhas iguais vao ser iguais com md5, pode combinar com id da pessoas

echo "<hr>";

print_r(sha1($senha)); // todas as senhas iguais vao ser diferentes com sha1

echo "<hr>";

// hash uso => hash(algo, data)

print_r(hash('md5', $senha)); 

echo "<hr>";

print_r(hash('sha1', $senha));
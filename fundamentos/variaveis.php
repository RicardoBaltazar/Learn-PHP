<?php
//variaveis de memória ocupam bytes, mas se multiplica por usuarios e interações na aplicação.
//crie com nomes autoexplicativos e camelcase. variaveis no php são case sensitive.
//o php para o programa após ler todo o código. garbage collector.
//apague a variavel quando for reutilizala.

//tipos básicos
$nome = 'ricardo';
$number = 1;
$float = 1.2;
$boolean = true;

//tipos compostos

//array
$frutas = array('laranja', 'maça', 'banana');

//objeto
//$data = new DateTime();

//tipos especiais
//resource
$arquivo = fopen('variaveis.php','r');

//null
$nulo = NULL;

echo $nome.' '.$number.' '.$float.' '.$boolean.' '.$frutas[0];
'<br>';
var_dump($nome).' '.var_dump($number).' '.var_dump($float).' '.var_dump($boolean).var_dump($frutas).var_dump($arquivo).var_dump($nulo);


$nome = 'nome';
unset($nome);

if(isset($nome)){
    echo $nome;
}




?>
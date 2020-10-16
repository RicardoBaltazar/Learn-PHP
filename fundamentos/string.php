<?php

$string = 'string';
//use aspas duplas para mostrar o valor da variavel dentro da string
echo "isto é uma $string";

echo '<br>';

$string2 = 'ricardo baltazar';
echo strtoupper($string2);
echo '<br>';
echo strtolower($string2);
echo '<br>';
echo ucfirst($string2);
echo '<br>';
echo ucwords($string2);
echo '<br>';


$nome = 'ricardo';
echo $nome;
echo '<br>';
$nome2 = str_replace("ricardo", "ricardo baltazar", $nome);
echo $nome2;

echo '<br>';
echo '<br>';

$frase ="A repetição é a mãe da retenção";
//posição da string na variável
$q = strpos($frase, 'mãe');
var_dump($q);
echo '<br>';
//o valor da string de 0 até a variavel $q
$texto = substr($frase, 0, $q);
var_dump($texto);
echo '<br>';
$texto = substr($frase, $q);
var_dump($texto);

echo '<br>';
echo '<br>';

$quantidadeString = 'abcdefghi';
echo strlen($quantidadeString)


?>
<?php

//atribuição
$nome = 'nome<br>';
echo $nome;
$nome .= 'outro nome';
echo $nome;

$value = 0;
$value += 10;
$value -= 5;
echo $value;


$num = 100;
$num *= .1;
echo $num;
echo '<br>';

$a = 10;
$b = 2;

echo $a + $b;
echo '<br>';
echo $a - $b;
echo '<br>';
echo $a * $b;
echo '<br>';
echo $a / $b;
echo '<br>';
echo $a % $b;
echo '<br>';

echo '<br>';
echo '<br>';

$fisrt = 10;
$second = 20;

var_dump($fisrt > $second);
echo '<br>';
var_dump($fisrt < $second);
echo '<br>';
//compara;áo de valor
var_dump($fisrt == $second);
echo '<br>';
//compara;áo de valor e tipo
var_dump($fisrt === $second);
echo '<br>';
var_dump($fisrt != $second);
echo '<br>';
//o spaceship esta disponivel a partir ada versáo 7 do php, retorna maior, menou OU igual
var_dump($fisrt <=> $second);

echo '<br>';
echo '<br>';

$null = NULL;
$null2 = NULL;
$null3 = 10;

//se uma variavel for nula, mostre a outra
echo $null ?? $null2 ?? $null3;

?>
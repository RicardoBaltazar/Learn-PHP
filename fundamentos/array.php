<?php

$carros[0][1] = 'ford';
$carros[0][2] = 'fiat';
$carros[0][3] = 'ferari';
$carros[0][4] = 'camaro';
$carros[1][1] = 'palio';
$carros[1][2] = 'mustang';
$carros[1][3] = 'mercedes';
$carros[][4] = 'porche';

echo $carros[0][2]."<br>";
echo $carros[1][2]."<br>";

echo end($carros[0]);


echo "<br>";

$nome = array();

array_push($nome, array(
    "nome" => "ricardo",
    "idade" => 27
));

array_push($nome, array(
    "nome" => "gabrielle",
    "idade" => 23
));

print_r($nome[1])."<br>";
print_r($nome[1]['nome']);

?>
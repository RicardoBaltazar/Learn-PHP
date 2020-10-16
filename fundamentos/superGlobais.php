<?php

//passe depos da url uma query string ?a=123
//toda a informação que vir por get ou post vem como string

//após a url ?a=123&b=456
$valor = (int)$_GET['a'];
$valor2 = (int)$_GET['b'];
var_dump($valor);
var_dump($valor2);

$log = $_SERVER['SCRIPT_NAME'];
echo $log;




?>
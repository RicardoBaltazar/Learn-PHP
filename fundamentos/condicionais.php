<?php

$num = 10;

if($num > 5){
    echo 'ok';
} else {
    echo 'erro';
}

echo "<br>";

echo($num > 5)? "ok": "erro";


echo "<br>";


$weekDay = date('w');

switch ($weekDay){
    case 0:
        echo "Domingo";
    break;
    
    case 1:
        echo "Segunda";
    break;

    case 2:
        echo "Terça";
    break;

    case 3:
        echo "Quarta";
    break;

    case 4:
        echo "Quinta";
    break;

    case 5:
        echo "Sexta";
    break;

    case 6:
        echo "Sabado";
    break;

    default: 
    echo 'erro';
}


echo "<br>";

for($i = 0; $i <= 10; $i++){
    echo $i. "<br>";
}

echo "<br>";

for($i = 0; $i <= 10; $i++){
    if($i >= 4 && $i <= 7) continue;
    echo $i. "<br>";
}

echo "<br>";

$array = array(
    "primeiro",
    "segundo",
    "terceiro"
);

foreach ($array as $index => $value){
    echo $index."<br>";
    echo $value."<br>";
}

echo "<br>";

$condicao = true;

while($condicao == true){
    echo 'verdadeiro';
break;
}

echo "<br>";

$total = 100;
$desconto = 0.9;

do {
    $total *= $desconto;
} while($total > 100);
echo $total;

?>
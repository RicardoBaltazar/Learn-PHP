<?php

    //por valor
    //mudou apenas dentro da função
    $valor = 10;
    function trocaValor($a){
        $valor = 50;
        return $valor;
    }

    echo $valor;
    echo "<br>";
    echo trocaValor($valor);

    echo "<br>";
    //por referência
    //mudou o valor na memória
    
    $valorReferencia = 10;
    function trocaValorporReferencia(&$a){
        $valorReferencia = 50;
        return $valorReferencia;
    }

    echo $valorReferencia;
    echo "<br>";
    echo trocaValorporReferencia($valorReferencia);
    echo "<br>";
    echo $valorReferencia;
    
    echo "<br>";
    echo "<br>";

    function soma(int ...$valores){
    return array_sum($valores);
    };

    echo soma(1,2,3);

?>
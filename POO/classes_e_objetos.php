<?php

//criando a classe
class caneta {
    //atributos
    var $modelo;
    var $cor;
    var $ponta;
    var $carga;

    //metodos
    function escrever(){
        //this serve para referenciar os atributos dentro do metodo
        if($this->ponta == true){
            echo 'não posso escrever';
        } else {
            echo 'estou escrevendo';
        }
    }

    function tampar(){
        $this->ponta=true;
    }

    function destampar(){
        $this->ponta=false;
    }


}; 



//estanciar um objeto de uma classe
$caneta1 = new caneta;
$caneta1->cor = 'azul';
$caneta->ponta = 0.5;
$caneta1->ponta = false;

$caneta1->destampar();
$caneta1->escrever();




?>
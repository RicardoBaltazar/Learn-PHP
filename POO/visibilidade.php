<?php

//criando a classe
class caneta {
    //atributos
    public $modelo;
    private $cor;
    protected $ponta;
    protected $carga;

    //metodos
    public function escrever(){
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

    private function destampar(){
        $this->ponta=false;
    }


}; 

//estanciar um objeto de uma classe
$caneta1 = new caneta;
$caneta1->modelo = 'bic cristal';

var_dump($caneta1);

?>
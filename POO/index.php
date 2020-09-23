<?php
//CLASES

class Pessoa {
    //atributo
    public $nome;

    //metodo
    public function falar(){

        return 'O nome é '.$this->nome;

        //fazendo referencia do atrinuto dentro do methoso, precisa do $this
    }
}

$ricardo = new Pessoa();
$ricardo->nome = 'Ricardo';
echo $ricardo->falar();



?>
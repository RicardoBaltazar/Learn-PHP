<?php

    class Caneta {
        public $modelo;
        private $ponta;

        //criando um metodo construtor
        //pode ter o mesmo nome da classe ou __construct
        public function __construct(){ 
            $this->cor='azul';
            $this->tampar();
        }

        public function tampar(){
            $this->tampar = true;
        }

        public function getModelo() {
            return $this->modelo;
        }

        public function setModelo($n) {
            $this->modelo = $n;
        }

        public function getPonta() {
            return $this->ponta;
        }

        public function setPonta($p) {
            $this->ponta = $p;
        }
    };


    $c1 = new Caneta();
    $c1->setModelo('BIC');
    //$c1->modelo = 'BIC';

    $c1->setPonta(0.5);
    //$c1->ponta = 0.5;

    var_dump($c1);
    echo "Eu tenho uma caneta {$c1->getModelo()} de ponta {$c1->getPonta()}";
    
?>
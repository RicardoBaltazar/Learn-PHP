<?php

class db {

    //host - onde o mysql esta instalado
    private $host = 'localhost';

    //usuario - usuario de conexão com o mysql
    private $usuario = 'root';

    //senha - senha cadastrada para o mysql
    private $senha = '';

    //banco de dados
    private $database = 'twitter_clone';

    public function conecta_mysql(){

        //criar a conexão
        $connection = mysqli_connect($this->host, $this->usuario, $this->senha, $this->database);

        //ajustar o charset de comunicação entre a aplicação e o banco de dados
        mysqli_set_charset($connection, 'UTF8');

        //verificar se houver erro de conexão
        if (mysqli_connect_errno()){
            echo 'Houve um erro ao tentar se conectar com o banco de dados mysql: '.mysqli_connect_error();
        }

        return $connection;
    }
}



?>
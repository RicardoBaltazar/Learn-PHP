<?php

    require_once('db.class.php');

    $usuario = $_POST['usuario'];
    '<br>';
    $email =  $_POST['email'];
    echo '<br>';
    //md5 criptografia para a senha
    $senha = md5($_POST['senha']);
    echo '<br>';


    $objDb = new db();
    $link = $objDb->conecta_mysql();

    //montando a query de insert
    $sql = "insert into usuarios(usuario, email, senha)values('$usuario', '$email', '$senha')";

    //executar a query
    //também criando tratativa de erro caso não execute a query
    if( mysqli_query($link, $sql)){
        echo 'usuario registrado com sucesso';
    } else {
        echo 'erro ao registrar o usuario';
    }

?>
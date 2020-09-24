<?php

    session_start();

    //ao clicar em sair,se elimina as variaveis globais ocm unset
    unset($_SESSION['usuario']);
    unset($_SESSION['email']);

    header('location: index.php')

?>
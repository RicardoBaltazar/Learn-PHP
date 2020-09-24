<?php

    require_once('db.class.php');


    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];


    //cuidar sempre a operação lógica AND ou OR
    $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha'";

    $objDb = new db();
    $link = $objDb->conecta_mysql();

    //executar a cunsulta
    $resultado_id = mysqli_query($link, $sql);

    if($resultado_id){
        $dados_usuario = mysqli_fetch_array($resultado_id);
    
        if(isset($dados_usuario['usuario'])){
            echo 'usuário existe';
        } else {
            //echo 'erro na consulta';
            //chamar uma função para redirecionar para alguma página
            header('location: index.php?erro=1');
        }

    } else {
        
    }

    //update
    //insert
    //select
    //delete
?>
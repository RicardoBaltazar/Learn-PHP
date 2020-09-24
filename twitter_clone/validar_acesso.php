<?php

    //por convenção é obm deixar o session no inicio do código para evitar problemas
    //agora se pode criar variaveis de sessão
    session_start();

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

            $_SESSION['usuario'] = $dados_usuario['usuario'];
            $_SESSION['email'] = $dados_usuario['email'];
            //com a superglobal, essas variaveis passam a existir no escopo global da aplicação


            //forçar o usuário ir para a página restrita
            header('location: home.php');
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
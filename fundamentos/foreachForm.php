<form action="" method="$_GET">
    <input type="text" name="nome" id="">
    <input type="text" name="idade" id="">
    <input type="submit" value="Submit">
</form>

<?php

if(isset($_GET)){
    foreach($_GET as $key => $value){
        echo "Nome do campo: ".$key."<br>";
        echo "Valor do campo: ".$value."<br>";
        echo "<hr>";
    }
}

?>
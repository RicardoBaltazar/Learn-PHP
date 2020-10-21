<?php

// Arquivo 2
session_start();
session_destroy();
echo $_SESSION['nome'];
echo "<br>";
echo $_SESSION['last'];


?>
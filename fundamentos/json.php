<?php

$json = '{"nome": "ricardo","idade": 27}';

$array = json_decode($json, true);
var_dump($array);

?>
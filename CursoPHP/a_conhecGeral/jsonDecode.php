<?php


$json = '["Matemática","Geografia","Ciências","Física",{"nome":"Endrich","sobrenome":"Assunção","idade":34}]';


$data = json_decode($json, true);


var_dump($data);
?>
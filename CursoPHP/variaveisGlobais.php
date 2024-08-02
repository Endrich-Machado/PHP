<?php
/*
localhost/?a(variavel nocaso é nosso) & (separador de nova variavel)e fica assim:

localhost?a=123&b=456
*/
$nome = (int)$_GET['a'];


$ip = $_SERVER['REMOTE_ADDR'];
echo "<br>IP: " . $ip;
?>
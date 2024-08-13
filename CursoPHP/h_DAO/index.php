<?php

require_once("config.php");

$user = new Usuario();

$user2 = $user->loadList();

echo $user2;

?>
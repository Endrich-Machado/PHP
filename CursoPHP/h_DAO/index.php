<?php

require_once("config.php");

$user = new Usuario();

$user2 = $user->loadUser("Endrich", "Endrich12345");
echo $user2

?>
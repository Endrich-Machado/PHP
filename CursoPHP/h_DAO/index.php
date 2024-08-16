<?php

require_once("config.php");

// $user = new Usuario();
// $user2 = $user->loadUser("Endrich", "Endrich12345");
// echo $user2


$aluno = new Usuario("Date", "14/02/1990");


$aluno->insert();

echo $aluno;
?>
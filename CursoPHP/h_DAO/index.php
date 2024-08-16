<?php

require_once("config.php");

// $user = new Usuario();
// $user2 = $user->loadUser("Endrich", "Endrich12345");
// echo $user2


// $aluno = new Usuario("Date", "14/02/1990");


// $aluno->insert();

// echo $aluno;


 $usuario = new Usuario();
// $usuario->update("12@@", "112654Nife", 18)
$usuario->delete(14);
echo $usuario->loadList();
?>
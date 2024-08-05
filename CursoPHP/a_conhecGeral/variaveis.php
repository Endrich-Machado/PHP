<?php

/*
As variaveis em php é seguido de $ 
unset remove a váriavel.
isset verifica se ela existe.
*/

$nome = "Endrich";
$sobrenome = "Machado Assunção";

$nomeConcat = $nome . " " . $sobrenome;

if(isset($nomeConcat)){

    echo "Nome: " . $nomeConcat;
}

//Array

$herois = array(
"Batman", 
"Superman", 
"Flash",
"Mulher Maravilha" 
);
echo "<br> Heroes: ". $herois[0] . " - ". $herois[1];
/*
$data = new DateTime();
var_dump($data);*/
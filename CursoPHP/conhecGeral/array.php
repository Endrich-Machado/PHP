<?php

$livros = array(
    "Matemática",
    "Geográfia",
    "Ciências",
    "fisíca",
);
//insere no array
array_push($livros, "Quimíca");

array_push($livros, array(
    'nome' => 'endrich', 
    'sobrenome' => 'Assunção',
'idade' => 34));
print_r($livros);


?>
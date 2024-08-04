<?php

// Define um array de livros
$livros = array(
    "Matemática",
    "Geografia",  
    "Ciências",
    "Física"     
);

// Adiciona um array associativo à lista de livros
$livros[] = array(
    'nome' => 'Endrich', 
    'sobrenome' => 'Assunção',
    'idade' => 34
);

// Configura o cabeçalho da resposta para UTF-8
header('Content-Type: application/json; charset=utf-8');

// Converte o array para JSON e imprime
echo json_encode($livros, JSON_UNESCAPED_UNICODE);

?>
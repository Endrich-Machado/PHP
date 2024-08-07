<?php
//Nescessário criar o banco dbphp e tabela usuario com colunas user e password.
//servidor, usuário, senha, banco.
$conn = new mysqli("localhost", "root", "", "dbphp");

if($conn->connect_error){
    echo "error" .$conn->connect_error;
}

// $stmt= $conn->prepare("INSERT INTO usuario (user, password) VALUES (?,?)");

// $stmt->bind_param("ss", $login, $senha);

// $login = "Endrich";

// $senha = "P@ssw0rd";

// $stmt->execute();

$result = $conn->query("SELECT * FROM usuario");

while($row = $result->fetch_array()){
    var_dump($row);
}
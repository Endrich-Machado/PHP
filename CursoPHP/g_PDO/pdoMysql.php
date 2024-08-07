<?php

$conn = new PDO("mysql:dbname=dbphp;host=localhost", "root", "");

$stmt = $conn->prepare("SELECT * FROM usuario");

$stmt->execute();

$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach($result as $row){
    foreach($row as $key => $value){
        var_dump($Key = $value);
    }
}
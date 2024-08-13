<?php

$conn = new PDO("mysql:dbname=dbphp;host=localhost", "root", "");

$conn->beginTransaction();

$stmt = $conn->prepare("INSERT INTO usuario (user, password) VALUES(:USER,:PASSWORD)" );

$stmt->bindParam(":USER",$teste);
$stmt->bindParam(":PASSWORD", $num);
$teste = "teste";
$num = 89098;
$stmt->execute();

$conn->commit();

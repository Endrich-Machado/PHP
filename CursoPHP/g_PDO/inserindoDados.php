<?php

$conn = new PDO("mysql:dbname=dbphp;host=localhost", "root", "");

$stmt = $conn->prepare("INSERT INTO usuario (user, password) VAlUES(:USER,:PASSWORD)");


$login = "Fernando";
$senha = "1234";

$stmt->bindParam(":USER", $login);
$stmt->bindParam(":PASSWORD", $senha);

$stmt->execute();
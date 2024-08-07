<?php

$conn = new PDO("mysql:dbname=dbphp;host=localhost", "root", "");

$stmt = $conn->prepare("UPDATE usuario set user = :USER, password = :PASSWORD WHERE idUsuario = :ID");


$login = "Fernando";
$senha = "456";
$id = 2;

$stmt->bindParam(":USER", $login);
$stmt->bindParam(":PASSWORD", $senha);
$stmt->bindParam(":ID", $id);

$stmt->execute();
<?php

require_once "config.php";

session_start();

//destruindo sessão
//session_unset();
//remove todos os dados de sessão;
// session_destroy()

echo $_SESSION["name"];

session_unset($_SESSION["name"]);

echo $_SESSION["name"];

?>
<?php

require_once "config.php";

echo "id da pagina: " . session_id();
//gera novo id
session_regenerate_id();

echo "<br> novo Id: " . session_id();

?>
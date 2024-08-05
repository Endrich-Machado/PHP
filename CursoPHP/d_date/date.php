<?php
//data formatada
echo date("d/m/Y H:i:s");

//timestamp atual... marco 0 (01/01/1970)
echo "<br>" . time() . "<br>";

//trazer uma data em timestamp.
echo "<br>" . strtotime("2001-09-11") . "<br>";

//transformando data em timestamp.
$usa = strtotime("2001-11-09");

//transformando o timestamp em data.
echo "<br>" . date("d/m/Y", $usa). "<br>";
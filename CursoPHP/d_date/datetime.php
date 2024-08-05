<?php
//estancia a data
$dt = new DateTime();
//estancia o periodo ver documentação
$periodo = new DateInterval("P15D");

echo $dt->format("d/m/Y H:i:s");

$dt->add($periodo);

echo "<br>";

echo $dt->format("d/m/Y H:i:s");

?>
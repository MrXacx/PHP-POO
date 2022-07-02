<?php
// echo date("d/m/Y") . PHP_EOL;

$set = new DateTime();
// var_dump($set);
// echo $set -> format("d/m/Y H:i:s") . PHP_EOL;

$intervalo = new DateInterval("PT5M"); // Define 5 minutos
$set -> add($intervalo); // Adiciona
$set -> sub($intervalo); // Subtrai


var_dump($set);
?>
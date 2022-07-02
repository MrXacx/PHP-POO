<?php
date_default_timezone_set("America/Bahia"); // Altera fuso-horário

$date = new DateTime();
$intervalo = new DateInterval("P5DT10H50M");

$date -> sub($intervalo);
echo $date -> format("d/m/Y H:i:s");
?>
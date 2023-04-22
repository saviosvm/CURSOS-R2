<?php

$valorA = 11;
$valorB = 12;

var_dump($valorA == $valorB); //igual
echo "<br>";
var_dump($valorA === $valorB); //igual identico
echo "<br>";
var_dump($valorA >= $valorB); //maior igual
echo "<br>";
var_dump($valorA <=> $valorB); //spaceship
echo "<br>";

$valorC = NULL;

var_dump($valorC ?? "Não há valor"); //Null colesce

?>
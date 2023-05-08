<?php

$cartas = ["A♥", "K♥", "1♥", "2♥", "3♥", "4♥"];

var_dump($cartas);

var_dump(shuffle($cartas)); //embaralha os valrores dentro dos array mantendo o indice estatico

var_dump($cartas);

//var_dump($cartas[array_rand($cartas)]); // busca os indices dos array de forma aleatoria

$resultado = array_rand($cartas, 2);
var_dump($resultado);

?>
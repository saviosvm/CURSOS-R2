<?php

$frutas = [
    "estaçao"=> "maçã", 
    "doce" => "uva",
     "pera", 
     "tropical" => "manga",
     "uva"
     ];

var_dump(array_keys($frutas));
var_dump(array_keys($frutas, "uva"));
var_dump(array_values($frutas));
?>
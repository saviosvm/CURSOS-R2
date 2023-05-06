<?php

$valores = [
    "banana",
    "maçã",
    "abacaxi",
    "banana",
    "abacaxi",
    10,
    15,
    15,
    20,
    20,
];

var_dump(array_count_values($valores)); //só conta string e valores inteiros

?>
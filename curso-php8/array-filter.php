<?php

$dados = [
    [
        "modelo" => "Onix",
        "ano" => 2020,
        "onix" => "50000",
        "fabricante" => "gm"
    ],
    [
        "modelo" => "Cruze",
        "ano" => 2021,
        "onix" => "100000",
        "fabricante" => "gm"

    ],
    [
        "modelo" => "Palio",
        "ano" => 1998,
        "onix" => "7500",
        "fabricante" => "fiat"

    ]
]; 

$filtrados = array_filter($dados, function($item, $key){

   // return $item["fabricante"] === "gm";
  // var_dump($indice);

   return $item["ano"] <= 2020 && $key > 1;

}, ARRAY_FILTER_USE_BOTH);

var_dump($filtrados);
?>
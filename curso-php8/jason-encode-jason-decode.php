<?php

$carros = [
    "motos" => [

    ],

    "carros" => [
        "Corsa",
        "Palio",
        "Gol", 
        "Uno", 
        "Zafira", 
        "Fiesta", 
        "Civic"],
];


 // echo json_encode($carros);
$dados = '{"motos":[],"carros":["Corsa","Palio","Gol","Uno","Zafira","Fiesta","Civic"]}';
$dados = json_decode($dados, true);
 var_dump($dados);
?>
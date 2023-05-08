<?php

$carros = ["Corsa", "Palio", "Gol", "Uno", "Zafira", "Fiesta", "Civic"];



var_dump(sort($carros)); // coloca o array em ordem alfabética
var_dump($carros);

$arquivos = [
    "imagem3.jpg",
    "imagem6.jpg",
    "imagem8.jpg",
    "imagem4.jpg",
    "imagem1.jpg",
    "imagem5.jpg",
    "imagem7.jpg",
    "imagem10.jpg",
    "imagem9.jpg",
    "imagem2.jpg",
    
];

//sort($arquivos, SORT_NUMERIC); // ORDENA O ARRAY POR ORDEM NUMÉRICA
//var_dump($arquivos);

sort($arquivos, SORT_NATURAL); // ordena de forma natural
var_dump($arquivos);
?>
<?php

$pasies = [
    "Brasil",
    "Argentina",
    "Argentina",
    100,
    200,
    100,
    "100" //array unique considera string e int como iguais
];

var_dump(array_unique($pasies, SORT_STRING)); //só mostra o valor uma vez, não deixar repetir, existem comandos de comparação
?>
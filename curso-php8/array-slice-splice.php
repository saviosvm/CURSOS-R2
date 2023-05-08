<?php

$paises = [
    "Estados Unidos",
    "Russia",
    "China",
    "Japão",
    "Egito",
    "Brasil"
];

// var_dump(array_slice($paises, 0, 2, true));

var_dump(array_splice($paises, 2, 1, ["França", "Itália"])); // adiciona remove e substtitui em qualquer lugar do array
 var_dump($paises);
?>
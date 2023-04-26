<?php

function fila()
{
    yield "Sávio";
    yield "Thais";
    yield "Dora";
    yield "João";
    yield "Ronaldo";
}

    $fila = fila();

    var_dump($fila->current());
    var_dump($fila->next());
    var_dump($fila->current());



?>
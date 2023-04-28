<?php

function qualquer()
{
    global $idade;
    $idade = 28;
    $GLOBALS["nome"] = "João";

}

qualquer();

var_dump($GLOBALS["idade"]);

?>
<?php

function recursivo ($a)
{

    if ($a < 100000){
        echo $a. " ";
        recursivo(++$a);
    }

}

recursivo(0);

?>
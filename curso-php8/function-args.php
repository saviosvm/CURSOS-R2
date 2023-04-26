<?php

$a = 50;

function somar(&$numeroA,  $numeroB = 10)
{
    $numeroA += $numeroB;
    echo $numeroA . "<br>";

}

somar($a,5);
somar(
    numeroB: 30,
    numeroA: $a
);

echo "agora fora da fnção: $a";

?>
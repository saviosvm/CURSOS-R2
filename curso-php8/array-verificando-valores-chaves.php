<?php

$paises = ["Brasil" =>210, "Argentina" => 50, "Chile" => 40, "Colombia" => 45];

var_dump($paises);

var_dump(in_array("Brasil", $paises)); // varifica se um determinado valor existe dentro do array
var_dump(array_search("Chile", $paises)); //encontra um determinado valor dentro de um array

var_dump(array_key_exists("Brasil", $paises)); // verifica se uma chave exise dentro de um array "Brasil" =>210

?>
<?php

$cores = ["Vermelho", "Preto", "Amarelo"];

var_dump($cores);
array_push($cores, "Branco", "azul", "verde"); //adiciona no final
var_dump($cores);

var_dump(array_pop($cores)); //remove do final
var_dump($cores);

var_dump(array_unshift($cores, "Laranja")); //adiciona no inicio

var_dump($cores);

var_dump(array_shift($cores)); //remover no inicio

var_dump($cores);


?>
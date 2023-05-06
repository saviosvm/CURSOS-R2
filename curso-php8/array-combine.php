<?php

$campos = [ "nome", "email", "idade"];

$valores = ["savio", "saviofg1@hotmail.com", "28"];


var_dump(array_combine($campos, $valores)); // os arrays precisam possuir o mesmo numero de valores

?>
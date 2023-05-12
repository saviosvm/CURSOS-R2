<?php

$arquivo = fopen("./arquivo4.csv", "x"); // r só abre o arquivo // a+ abre e  cria um novo arquivo caso não exista

var_dump('abriu o arquivo');

fclose($arquivo);

var_dump('fechou o arquivo');


?>
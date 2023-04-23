<?php

$msg = "400";

$retorno = match($msg) {
    "200" => "Sucesso",
    "300" => "redirect",
    "400" => "erro",
    default => "padrão"
};

var_dump($retorno);


?>
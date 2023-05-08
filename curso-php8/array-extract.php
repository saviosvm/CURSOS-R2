<?php
$email = "saviofg1@hotmail.com";

$pessoa = [
    "nome" => "Djalma",
    "idade" => "40",
    "email" => "djalma@hcode.com.br"
];

var_dump(extract($pessoa, EXTR_PREFIX_ALL, "var"));
var_dump($email);
var_dump($nome);
var_dump($var_email);
?>
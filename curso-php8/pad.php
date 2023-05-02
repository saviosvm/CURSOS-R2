<?php

$nome = "Savio Figueiredo";
$email = "saviofg1@hotmail.com";
$idade = "28";

echo str_pad($nome, 30, ".", STR_PAD_LEFT."\n")."<br>";
echo str_pad($email, 30, ".", STR_PAD_RIGHT."\n")."<br>";
echo str_pad($idade, 30, ".", STR_PAD_BOTH."\n")."<br>";

?>
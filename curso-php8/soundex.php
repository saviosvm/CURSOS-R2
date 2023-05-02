<?php


$original = "Michael Jackson";

$search = "maicael jecsom";

var_dump(soundex($original) == soundex($search)); // metaphone() é mais preciso 

?>
<?php

$dataNascimento = "28/02/1975";

$dataArray = explode("/", $dataNascimento);

$dia = (int)$dataArray[0];
$mes = (int)$dataArray[1];
$ano = (int)$dataArray[2];

var_dump(checkdate($mes, $dia, $ano));


?>
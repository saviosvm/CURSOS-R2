<?php

$frutas = ["tropical" => "maçã", "banana", "bacaxi"];

$outrasfrutas = ["limão", "melancia", "tropical" => "morango"];


var_dump(array_merge($frutas, $outrasfrutas));

?>
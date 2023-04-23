<?php

$aereas = ["gol", "latam", "azul"];

foreach ($aereas as $chave => $valor) {
    var_dump(strlen($valor));

};
echo "<br><br>";
foreach ($_SERVER as $valor){
    var_dump($valor);
}
?>
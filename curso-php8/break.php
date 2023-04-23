<?php

$leitura = 20;
$eof = 250;

while($leitura <= $eof) {

    if($leitura == 80){
        echo "saindo do laço";
        break;
    }

$leitura += 20;
echo $leitura."<br>";

}

echo "<br>fora do comando while";

?>
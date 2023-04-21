<?php
$total = 200.00;
$valorA = $total;
//$valorA /= 2;
$desconto = 33;
$formula = $desconto / 100;

$valorA *= $formula;

$total -= $valorA;

echo $total;
?>
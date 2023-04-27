<?php
function calcIRPF($salario, $dependentes)
{
    $aliquota = 0; 
    $deducao = 0;

    if($salario <= 1903.98){
        $aliquota = 0;
        $deducao = 0;
    }elseif($salario >= 1903.99 || $salario <= 2826.65){
        $aliquota = 7.6;
        $deducao = 142.80;
    }elseif($salario > 2826.66 || $salario <= 3751.05){
        $aliquota = 15;
        $deducao = 354.80;
    }elseif($salario > 3751.06 || $salario <= 4664.68){
        $aliquota = 22.5;
        $deducao = 636.13;
    }elseif($salario > 4664.68){
        $aliquota = 27.5;
        $deducao = 869.36;
    }
    
    $imposto = (($salario - ($dependentes * 189.59)) * ($aliquota/100)) - $deducao;

var_dump(number_format($imposto, 2, ','));
}

calcIRPF(3000, 3);
?>
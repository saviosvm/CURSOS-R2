<?php
$sobrenome = "Figueiredo";

$nome1 = "Sávio $sobrenome";
$nome2 = 'Sávio $sobrenome';

$idade = 28.546548;

$vip = false;

$aereas = ["Gol", "Latam", "Azul"];

class Cliente{
    public function __construct(public string $nome){
        echo $this->nome;
    }
}

$savio = new Cliente("Sávio Figueiredo de Morais");

$linhasAereas = function(): iterable {
    return ["Gol", "Latam", "Azul"];
};

function executar(mixed $parametro): void{
}

$nulo = NULL;

$arquivo = fopen("./variaveis.php", "a+");

/*
echo $nome1;
echo '<br>';
echo $nome2;
*/
echo '<br>';
echo gettype($arquivo);
echo '<br>';
echo get_debug_type($arquivo); 
echo '<br>';
//var_dump(is_iterable($linhasAereas()));
//echo '<br>';
//var_dump(is_callable($linhasAereas));

?>
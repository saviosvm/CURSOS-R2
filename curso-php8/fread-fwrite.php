<?php

$arquivo = fopen("./arquivo.csv", "a+"); // r só abre o arquivo // a+ abre e  cria um novo arquivo caso não exista
var_dump('abriu o arquivo');


$registro = "Sávio Figueiredo;saviofg100@gmail.com;28\r\n";
var_dump(fwrite($arquivo, $registro));

rewind($arquivo); // vai voltar o ponteiro para inicio do arquivo e mostra no navegador o que foi inserido

var_dump(fread($arquivo, filesize("./arquivo.csv")));

rewind($arquivo);
fseek($arquivo, 10);

var_dump(fwrite($arquivo, "--ESCREVI AQUI--"));


fclose($arquivo); //fecha o arquivo

var_dump('fechou o arquivo');


?>
 <?php

 /**
 * 
 * TODO: 1. Crie três variáveis para armazenar o seu nome, idade e esporte predileto.
 * 
 * TODO: 2. Crie um array com três tecnologias que você pretende aprender.
 * 
 * TODO: 3. Converta a variável com a idade para string e mostre com var_dump o valor dela antes e depois da conversão.
 * 
 * TODO: 4. Imprima na tela os valores de nome, idade e esporte predileto criados no escopo global por meio de uma função.
 * 
 */
 
 $nome = "Sávio";
 $idade = 28;
 $esporte = "MB";

 $tecnologias = ['php', 'laravel', 'api'];

 var_dump($idade);
 settype($idade, "string");
 var_dump($idade);

 function imrpimir(){
  global  $nome;
  global $idade;
  global $esporte;
  global $tecnologias;

  echo  "<br> <br> <br>nome= $nome";
  echo "<br>idade = $idade";
  echo "<br>esporte = $esporte";
 
  for ($i = 0; $i <3; $i++) {
    echo "<br>tecnologias = $tecnologias[$i]";
 }

 }

imrpimir();

 ?>

 

 
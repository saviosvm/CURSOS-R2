<?php

$cep = "76330-000";


$curl = curl_init();


curl_setopt($curl, CURLOPT_URL, "http://localhost:81/curso-php8/post.php");

$dados = [
   
    "nome" => "savio",
    "email" => "savio@hotmail.com"

];

curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, $dados);

$resposta = curl_exec($curl);

curl_close($curl);


echo $resposta;
?>
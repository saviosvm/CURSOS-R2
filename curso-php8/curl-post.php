<?php

$cep = "76330-000";


$curl = curl_init();


curl_setopt($curl, CURLOPT_URL, "https://viacep.com.br/ws/{$cep}/json/");

curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$resposta = curl_exec($curl);

curl_close($curl);

$dados = json_decode($resposta, true);

echo $dados['localidade'];
?>
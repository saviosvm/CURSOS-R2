<?php

function getDominio($url)
{


$inicio = strpos($url, "://")+3;

$dominio =  substr($url, $inicio, strlen($url)); //mostra somente o que delimitamos

return substr($dominio, 0, strpos($dominio, "/")); // vai pegar da posição 0 até a /

}

echo getDominio("https://hcode.com.br/blog");




?>
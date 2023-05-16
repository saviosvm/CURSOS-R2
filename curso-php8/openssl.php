<?php

//var_dump(openssl_get_cipher_methods());

$cifra = "AES-128-CBC";

$chave = random_bytes(32);

//var_dump(bin2hex($chave));

$iv = random_bytes(openssl_cipher_iv_length($cifra));

var_dump(bin2hex($iv));

$mensagemOriginal = "Savio Figueiredo";

///////////////////////////////////////////////////////////
//outro aqrquivo

$bytes =  base64_decode("Yz32mHNVHT+IEwTt440zmIDeba7sUuQZdzcUB4yDpPqBYzMPzlNKDa3GaIrbaVB/");
 
$meuIv = mb_substr(
    $bytes,
    0,
    openssl_cipher_iv_length($cifra),
    "8bit"

);

var_dump(bin2hex($meuIv));

$mensagemCriptografada = openssl_encrypt(
    $mensagemOriginal, 
    $cifra, 
    $chave,
    OPENSSL_RAW_DATA,
    $iv,

);

$resutlado = base64_encode($iv.$mensagemCriptografada);

//var_dump("Esse é um base64: ",$resutlado);


//var_dump(bin2hex($mensagemCriptografada));

$mensagemDescriptografada = openssl_decrypt(
    $mensagemCriptografada, 
    $cifra, 
    $chave, 
    OPENSSL_RAW_DATA, 
    $iv
    );

//var_dump($mensagemDescriptografada);



?>
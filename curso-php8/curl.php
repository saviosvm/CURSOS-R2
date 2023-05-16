<?php

$curl = curl_init("http://localhost:81/curso-php8/api.php");

 
$response = curl_exec($curl);

curl_close($curl);

var_dump($response);

?>
<?php
/* verificar os nomes dos parâmetros
$f = new ReflectionFunction("setcookie");
var_dump($f->getParameters());

exit;
*/
setcookie(

name: "empresa",
value: "hcode",
expires_or_options: time()+86400

);

var_dump($_COOKIE)
?>
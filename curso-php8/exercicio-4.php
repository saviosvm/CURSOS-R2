<?php
function cookiePhp8()
{
   global $produto;
   $produto =  "Curso de PHP 8 - Ganhe 5% de desconto para comprar";

setcookie(
    name: "cursophp8",
    value: "dafdsfghafdhsad7g897ad987ga87ga897gd",
    expires_or_options: time()+600

);

}
cookiePhp8();
echo $produto."<br><br>";
var_dump($_COOKIE);
//print_r($_COOKIE);

?>
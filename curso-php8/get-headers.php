<?php

$link= "https://google.com.br";

echo "<pre>";
print_r( get_headers($link, 0)); //pega as informações do cabeçalho(conexões)
echo "</pre>";



?>
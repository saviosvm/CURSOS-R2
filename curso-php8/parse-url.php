<?php

$url = "https://hcode.com.br/blog?nome1=savio&nome2=thais#home";

echo "<pre>";
print_r(parse_url($url)); //mostra os componentes da url
echo "</pre";
?>
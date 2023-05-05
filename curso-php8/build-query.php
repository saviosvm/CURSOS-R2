<?php

 var_dump($_GET);
$fields = [

    "nome" => "Savio",
    "sobrenome" => "Figueiredo"
];

echo '<a href="?'.http_build_query($fields).'">link</a>';

?>
<?php

var_dump(file_get_contents("./arquivo.csv")); //pode pegar arquivos remotos, como site;

file_put_contents("./arquivo.csv", "Novo arquivo");
?>
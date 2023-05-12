<?php

var_dump( filesize("./arquivo.csv")); //exibi tamanho do arquivo em caracteres
var_dump(filetype("./arquivo.csv")); // exibe o tipo de arquivo

var_dump(mime_content_type("./arquivo.csv")); //exibe o formato do arquivo

var_dump(stat("./arquivo.csv")); // exibe varias informações dobre o arquivo timestamp e etc em forma de array

?>
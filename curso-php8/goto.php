<?php

var_dump("inicio");

goto destino;

conteudo:

var_dump("conteudo");

return;

destino:

var_dump("termino");

goto conteudo;

?>
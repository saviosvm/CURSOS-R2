<?php

//var_dump(scandir("./")); //acessa todos os arquivos do diretório
$dir = "./uploads";
if(file_exists("./uploads")){
    var_dump("diretório já existe");
}else{
    mkdir($dir);
    var_dump(" criado com sucesso");
}

?>
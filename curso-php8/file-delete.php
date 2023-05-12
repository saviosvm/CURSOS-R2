<?php

if(file_exists("arquivo.csv")){
    unlink("./arquivo.csv");  // apaga arquivo
}

if(file_exists("arquivo.csv")){
    rmdir("./arquivo.csv"); //apaga pasta
}

?>
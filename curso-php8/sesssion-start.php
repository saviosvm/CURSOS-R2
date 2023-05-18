<?php
// session_start(); //estou usando ato start no php ini
echo match(session_status()){
    PHP_SESSION_DISABLED => "desabilitado",
    PHP_SESSION_NONE => "Nenhuma",
    PHP_SESSION_ACTIVE => "Ativa",
};

?>
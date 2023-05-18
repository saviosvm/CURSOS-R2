<?php

//estou usando auto start na sessão

echo session_id()."<br>";

$_SESSION["nome"] = "Sávio Figueiredo";

echo "session_id: ". $_SESSION["nome"];



?>
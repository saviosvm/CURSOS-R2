<?php

@session_start();

echo session_id()."<br>";

session_regenerate_id(true); // true gera  uma sessão nova e mata a antiga

?>
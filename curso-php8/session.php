<?php
session_start();
$_SESSION["empresa"] = "StudioModeleJeans";

echo "criando a variavel Session <br>";
echo $_SESSION["empresa"];

?>

<br>

<a href="session-2.php">VEJA O RESULTADO</a>
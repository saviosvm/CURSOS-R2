<?php
 // http://localhost:81/curso-php8/get.php?nome=savio&empresa=hcode+treinamentos

 if(isset($_GET["empresa"]))
{
echo $_GET["empresa"];
}

echo ("<br>");

echo isset($_GET["nome"]) ? $_GET["nome"] : "não existe";

$get = fn($key) => isset($_GET[$key]) ? $_GET[$key] : "não existe";

$id = (int)$get("id") + 1;

echo ("<br>");


echo '<a href = "?id='.$id.'">proximo </a>"';

?>
<?php

var_dump($_SERVER["REQUEST_METHOD"]);
echo "<br>";
var_dump($_REQUEST["nome"]);
echo "<br>";

?>

<form method="post">

<input type="text" name="nome">
<input type="submit">

</form>
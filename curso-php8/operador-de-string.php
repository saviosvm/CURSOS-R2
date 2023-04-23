<?php

$primeiroNome = "Sávio";
$ultimoNome = "Figueiredo";

$nomeCompleto = $primeiroNome . " " . $ultimoNome;

var_dump($nomeCompleto);

echo "<br>";

$texto = "Lorem ipsum dolor sit amet consectetur ";
$texto .= "adipisicing elit. Repellat, amet sint?"; 
$texto .= "At minus, optio, laudantium officiis ducimus corrupti,";
$texto .= "recusandae magni totam reiciendis provident esse numquam"; 
$texto .= "dolorvibus necessitatibus odio ex nihil.";

echo $texto."<br>";

$texto2 = <<<HCODE
<pre>
$nomeCompleto
Lorem ipsum, dolor sit amet consectetur adipisicing elit.
Tempore mollitia aliquid quaerat similique iure officia aut doloribus excepturi cum, 
distinctio aspernatur sed minus! Officia corporis minus libero optio labore quidem?
</pre>
HCODE; // usando HCODE(pode ser qualquer palavra) sem aspas é como se fosse aspas duplas 'Hcode' é como se fosse aspas simples

ECHO $texto2;

?>
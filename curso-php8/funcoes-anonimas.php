<?php

$empresa = function($site, $tel)
{

    return "https://$site<br>Tel: $tel";
};


function somar($a, $b, $callback)
{
    $callback($a + $b);
}
echo "<br>";
somar(2, 3, function($resultado) use ($empresa){

    echo $empresa("www.google.com", 62991778908);

    var_dump($resultado);
});

?>
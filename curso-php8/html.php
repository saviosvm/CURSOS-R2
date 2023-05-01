<?php

$html = '<a href="https://www.google.com">Acessse</a>';

//echo(htmlentities($html,ENT_NOQUOTES)); // mostra o html em forma de texto


$db = "&lt;a href=&quot;https://www.google.com&quot;&gt;Acessse&lt;/a&gt;";

echo html_entity_decode($db);


?>
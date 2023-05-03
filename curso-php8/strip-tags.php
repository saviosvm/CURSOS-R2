<?php

$comentario = 'Olá,<a href="#"> <strong>tudo bem</strong></a>';

echo strip_tags($comentario, "<strong><a>"); // impede o uso de tags(só uusa a que permitir)

?>
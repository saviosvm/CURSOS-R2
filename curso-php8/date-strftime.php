<?php
setlocale(LC_TIME, "portuguese");
$data = "Hoje é  %a, %d de %B de %Y";


var_dump(ucwords(strftime($data, strtotime("today"))));

?>
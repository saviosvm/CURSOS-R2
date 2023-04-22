<?php

$resultado = `dir`;

$oem = sapi_windows_cp_get("oem");
$resultado = sapi_windows_cp_conv($oem, 65001, $resultado);

echo "<pre>$resultado</pre>"
?>
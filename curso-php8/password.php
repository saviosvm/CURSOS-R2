<?php

$senha = "savio299";

$hash = password_hash($senha, PASSWORD_DEFAULT);

$bancoDeDados = '$2y$10$Ci.YSaNz1pdIiMgOzyasj.fNhwwBXpOLgu4Fghic1JPxJ4UUOpTei';

var_dump(password_verify($senha, $bancoDeDados));



?>
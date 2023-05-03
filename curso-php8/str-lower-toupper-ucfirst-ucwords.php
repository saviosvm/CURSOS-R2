<?php

$nome = "SávIo FiGueiredo de MorAis";
$nome2 = "SávIo;FiGueiredo;de;MorAis";


echo strtolower($nome) . "<br>"; //mostra tudo minusculo
echo strtoupper($nome) . "<br>"; //mostra tudo maisuculo, menos o acento
echo mb_strtoupper($nome) . "<br>"; // muda até o caracter que tem o aacento para maiusculo
echo ucfirst(strtolower($nome)) . "<br>"; //converte tudo para minusculo para depois deixar o primeiro caracter maiusculo
echo ucwords($nome, ";") . "<br>"; // ucwords faz com que todas as palavras depois de um espaço sejam maiusculas, no terceiro parametro pode se colocar um delimitador  para adicionar um espaço sempre que char o delimitador



?>
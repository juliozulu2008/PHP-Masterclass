<?php


// stdclass = classe vazia do php, padrao dos objetos que ano sao declarados

$objecto = new \StdClass();
$objecto->nome = "Julio";
$objecto->sobrenome = "Cesar";

var_dump($objecto);

echo gettype($objecto); // quando tiver duvida com uma variaavel utilza o gettype
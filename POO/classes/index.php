<?php

// exemplo para estudo
require_once('./classes/Usuario.php');

$usuario = new Usuario;

$usuario->nome = "Julio Cesar";
$usuario->email = "juliocddossantos@outlook.com";

echo $usuario->getNome();
echo "<br/>";
echo $usuario->getEmail();
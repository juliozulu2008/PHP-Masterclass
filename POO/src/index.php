<?php


use src\Models\Usuario;

require_once('vendor/autoload.php');

$usuario = new Usuario;

$usuario->nome = "Julio Cesar";
$usuario->email = "juliocddossantos@outlook.com";

echo $usuario->getNome();
echo "<br/>";
echo $usuario->getEmail();
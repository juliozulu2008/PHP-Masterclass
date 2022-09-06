<?php

phpinfo(); // todas as informaçoes dobre me servidor php.

$nome = "Julio Cesar";

echo strtoupper($nome); // textos em maisculo 
echo strtolower($nome); // textos em minusculo
echo trim($nome); // retira os espaços
echo stripslashes($nome); // caso tenha uma barra invertido ele remove '\'
echo htmlspecialchars($nome); // caso tenha html no texto ele deixa aparecer ou javascript

$pizzas = "Mussarela, Calabreza, Frango";
$arrayDePizzas = explode("", $pizzas);
var_dump($arrayDePizzas);
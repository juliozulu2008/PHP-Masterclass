<?php


$frutas = array("maça", "Banana");

print_r($frutas); // essa funçao serve para verificar os items dos arrays

$idiomas = ['portugues', 'espnahol', 'Ingles'];

$sobrenome = array(
    'icaro' => "william",
    'Danilo' => 'Sampaio',
);

$idades = [
    'Julio' => 33,
    'Fernando' => 22
];

print_r($idiomas);
print_r($sobrenome);
print_r($idades);

$nome = "Julio";
$sobrenome = "Cesar";

$resultado = compact('nome', 'sobrenome'); // array assosiativo com funçao compact do php

print_r($resultado);
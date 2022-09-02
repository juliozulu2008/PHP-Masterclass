<?php


//exemplop com lambda puro

$filtro = ["1" => "Julio", "2" => "Kelly"];
$nomes = ["Julio", "Kelli", "Laura", "Ravi"];

$resultado = array_filter($nomes, function ($valor) use ($filtro) 
{
    return ($valor === "Julio") || ($valor === "Kelli");
});

var_dump($resultado);

// exemplo com closures
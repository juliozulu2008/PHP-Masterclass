<?php


$nome = ["julio", "Kelly", "Laura", "Ravi"];
$resultado = [];

foreach ($nome as $key => $value) {
    if (!($key % 2)) {
        continue;
    }
    array_push($resultado, $value);
}

var_dump($resultado);
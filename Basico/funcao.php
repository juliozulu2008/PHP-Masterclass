<?php


function imprimir()
{
    echo "Ola Mundo!";
}

imprimir();

function dumpdie($variavel)
{
    echo "<pre>";
    var_dump($variavel);
    echo "<pre>";
    die();
}

$nomes = ["Julio", "Kelly"];

dumpdie($nomes);
<?php

//tratament do erro 

error_reporting(-1);
set_error_handler(function ($code, $message) {
    throw new ErrorException($message, $code);
});

$numerador = 20;
$denominador = 0;

//echo $numerador / $decimador;
//erro feio pois é uma divisao por zero
//porem uano o try  cath fica assim
try {
    echo $numerador / $decimador;
}
catch (\Exception $error) {
    echo "$error=>getMessage()"; // no laravel vem a formataçao corrreta porem no php puro nao tem que tratar
}
finally { // quando seta finally executa ele obigatoriamente
    echo "Fim da Execuçao...";

}
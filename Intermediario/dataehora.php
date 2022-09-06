<?php

// d = dia
// m = mes
// Y = ano

date_default_timezone_set('America/Sao_Paulo');

echo "Hoje é " . date("d/m/y") . "<br/>";
echo "Hoje é " . date("d.m.y") . "<br/>";
echo "Hoje é " . date("Y-m-d") . "<br/>"; // em banco de dados se trabalha assim
echo "Hoje é " . date("l") . "<br/>";

echo "<hr/>";

echo "Agora é " . date("h:i:s");

echo "<hr/>";

echo "Dta e hora Completa: " . date("d/m/y h:i:s");
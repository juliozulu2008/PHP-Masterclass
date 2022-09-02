<?php

$cpf = "";
$cnpj = "12.123.123./0001-12";
$tipodeDocumento = "";

$tipodeDocumento = ($cpf != '') ? 'CPF' : 'CNPJ';

echo $tipodeDocumento;
<?php

// reaproveitar arquivos php
//include ira adicionai os arquivos em outro escript
//unclude_once é a mesma coisa porem nao ira repetir o arquivo caso ja tenha sido incluido.
//require
//require_once mesma coisa que o include porem se nao encontrar o arquivo php ele encerra a aplicaçao.
// e ele retornara um fata error.

//exemplo 

define('DRIVER', 'mysql');
define('DATABASE', 'ALBANCO');
define('DATABASE_USER', 'root');
define('DATABASE_PASS', 'secret');

function getConnection()
{
    return DRIVER . "," . DATABASE . "," . DATABASE_USER . "," . DATABASE_PASS;
}

// e dai em outro arquivo teria as opçoes destas variaveis
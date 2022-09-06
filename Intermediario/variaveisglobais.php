<?php

// $_GET pegar parametros naso requisiçoes http
//neste case ele vai pegar "localhost/php-masterclass/intermediario/variaveisglobais?nome=julio
$nome = $_GET['nome'] ?? 'Nao Informado';
//neste caso ele vai pegar o nome informado no caso julio
echo $nome . '<br/>';
$sobrenome = $_GET['sobrenome'] ?? 'Nao informado';
// quando tem mais parametros usasse o separador &
//exemplo localhost/php-masterclass/intermediario/variaveisglobais?nome=julio&sobrenome=Cesar
echo $sobrenome . '<br/>';

//$_POST


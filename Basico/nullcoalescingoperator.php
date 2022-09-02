<?php

$_POST = array(
    'nome' => "Julio Cesar",
    'sobrenome' => null
);

//metodo antico de se fazer
$nome = "";
$sobrenome = "";

if($_POST['nome'] <> null){
    $nome = $_POST['nome'];
} else{
    $nome="Nome Nao preenchido";
}

if ($_POST['sobrenome']<> null) {
    $sobrenome=$_POST['sobrenome'];
} else {
    $sobrenome="Sobrenome nao preenchido!";
}

echo "{$nome} <br/>";
echo "{$sobrenome}";
//fim do modo antigo
// novo modo
$nome = $_POST['nome'] ?? "Nome Nao Preenchido";
$sobrenome = $_POST['sobrenome'] ?? "Sobrenome nao Preenchido!";

echo "{$nome} <br/>";
echo "{$sobrenome}";
//fim do novo metodo

// validaçao multripa 

$um = null;
$dois = "Segundo Ok!";
$tres = null;
$quatro = null;

$resultado = $um ?? $dois ?? $tres ?? $quatro ?? "Nao Preenchido!";
echo $resultado;
<?php


$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES['fileToUpload']['name']);
$uploadOk = 1;

$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

//verificar se o arquivo de imagem é real
if (isset($_POST['submit'])) {
    $check = getimagesize($_FILES['fileToUpload']['tmp_name']);

    if ($check !== false) {
        echo "O Arquivo de Imagem - " . $check['mime'] . ". <br/>";
    }
    else {
        echo "O arquivo nao é uma Imagem";
        $uploadOk = 0;
    }
}
// verifica se o arquivo ja exixte
if (file_exists($target_file)) {
    echo "Desculpe o Arquivo ja existe!";
    $uploadOk = 0;
}
// verifica o tamnho do arquivo
if ($_FILES['fileToUpload']['size'] > 500000) {
    echo "Desculpe o Tamnaho do arquivo é muito grande!";
    $uploadOk = 0;
}
// certifica que o arquiv é uma imagem
if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
    echo "Desculpe apenas arquvos JPG, JPEG, PNG  GIF são permitidos";
    $uploadOk = 0;
}
// verifica se a variavel $ uploadOk esta com0 ou com 1 ( Permitoida para o upload )
if ($uploadOk === 0) {
    echo "Desculpe, o seu arquivo nao foi enviado para o servidor.";
}
else {
    //verifivcar se o diretorio existe
    if (!file_exists('uploads/')) {
        mkdir('uploads/', 0777, true);
    }
    //move o arquivo da pasta /tmp para a pasta uploads/
    if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file)) {
        echo "O arquivo " . basename($_FILES['fileToUpload']['name']) . "Foi enviado com Sucesso!";
    }
    else {
        echo "Desculpe, houve um erro ao eviar o seu arquivo para o servidor.";
    }
}
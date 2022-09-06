<?php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$dados = [
    'nome' => $_POST['nome'] ?? '',
    'pais' => strtoupper($_POST['pais']) ?? '',
    'mensagem' => $_POST['mensagem'] ?? ''
];

$mail = new PHPMailer(true);

try {
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->isSMTP();
    $mail->Host = 'smtp.mailtrap.io';
    $mail->SMTPAuth = true;
    $mail->Username = 'bb13af7b403674';
    $mail->Password = '15f8d8562c597b';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;
    $mail->CharSet = 'UTF-8';

    // Email de :
    $mail->setFrom('juliozulu2008@gmail.com', 'Julio Cesar');

    //para:
    $mail->addAddress('juliocddossantos@outlook.com', 'Julio Cesar Dias');

    //Conteudo:
    $mail->isHTML(true);
    $mail->Subject = 'Contato do Site @ Teste';

    $corpo = "<b>NOME: </b>{$dados['nome']} <br/>";
    $corpo .= "<b>PAIS: </b>{$dados['pais']} <br/>";
    $corpo .= "<b>MENSAGEM: </b>{$dados['mensagem']} <br/>";

    $mail->Body = $corpo;
    $mail->Send();
    echo "Mensagem enviada com sucesso!";
}
catch (\Exception $e) {
    echo $e->getMessage();
}
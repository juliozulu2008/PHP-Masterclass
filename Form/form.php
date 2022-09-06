<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SendMail</title>
</head>

<body>
    <form action="sendmail.php" method="POST">
        <label for="name">Nome Completo</label>
        <input type="text" name="nome" id="" placeholder="Informe o seu nome....">
        <br><br>
        <label for="pais">Pais</label>
        <select name="pais">
            <option value="">Selecione um Pais</option>
            <option value="brasil">Brasil</option>
            <option value="usa">Estados Unidos</option>
        </select>
        <br><br>
        <label for="mensagem">Mensagem</label>
        <textarea name="mensagem" cols="30" rows="10" placeholder="Insira sua mensagem aqui..."></textarea>
        <br><br>
        <input type="Submit" value="Enviar">
    </form>

</body>

</html>
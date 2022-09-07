<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>

<body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        Selecione uma Imagem:
        <input type="file" name="fileToUpload">
        <br>
        <input type="submit" name="submit" value="Enviar Imagem">
    </form>

</body>

</html>
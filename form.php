<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="adc.php" method="post">
        <input type="text" name="nome" id="nome">
        <input type="text" name="idade" id="idade">
        <input type="text" name="renda" id="renda">
        <input type="submit" value="enivar">
    </form>
    <form action="delete.php" method="post">
        <label for="nome"> Excluir </label>
        <input type="text" name="nome" id="nome">
        <input type="submit" value="enviar">
    </form>
</body>
</html>
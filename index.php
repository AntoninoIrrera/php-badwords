<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords</title>
</head>

<body>

    <form action="censura.php" method="POST">

        <label for="paragrafo">Inserisci il tuo paragrafo</label>
        <input type="text" id="paragrafo" name="paragrafo">
        <label for="censura">Inserisci la parola da censurare</label>
        <input type="text" id="censura" name="censura">
        <button type="submit">Invia</button>

    </form>

    

</body>

</html>
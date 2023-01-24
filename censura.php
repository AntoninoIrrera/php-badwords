<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Censura</title>
</head>

<body>

    <?php


    $paragrafo = $_POST["paragrafo"];
    $censura = $_POST["censura"];

    $paragrafo = trim(strtolower($paragrafo));
    $censura = trim(strtolower($censura));



    echo $paragrafo . " " . strlen($paragrafo);

    ?>
    <br>
    <?php
    $paragrafoCensurato = str_replace($censura, "***", $paragrafo);

    echo $paragrafoCensurato . " " . strlen($paragrafoCensurato);
    ?>


</body>

</html>
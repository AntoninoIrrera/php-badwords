
<?php


    $paragrafo = $_POST["paragrafo"];
    $censura = $_POST["censura"];

    $paragrafo = trim(strtolower($paragrafo));
    $censura = trim(strtolower($censura));



    echo $paragrafo." ".strlen($paragrafo);
    
?>
<br>
<?php
    $paragrafoCensurato = str_replace($censura,"***",$paragrafo);

    echo $paragrafoCensurato." ".strlen($paragrafoCensurato);
?>

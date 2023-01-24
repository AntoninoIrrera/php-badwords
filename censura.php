
<?php


    $paragrafo = $_GET["paragrafo"];
    $censura = $_GET["censura"];

    $paragrafo = trim(strtolower($paragrafo));
    $censura = trim(strtolower($censura));



    echo $paragrafo." ".strlen($paragrafo);
    
?>
<br>
<?php
    $paragrafoCensurato = str_replace($censura,"***",$paragrafo);

    echo $paragrafoCensurato." ".strlen($paragrafoCensurato);
?>

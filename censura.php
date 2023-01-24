
<?php


    $paragrafo = $_GET["paragrafo"];
    $censura = $_GET["censura"];

    echo $paragrafo." ".strlen($paragrafo);
    
?>
<br>
<?php
    $paragrafoCensurato = str_replace($censura,"***",$paragrafo);

    echo $paragrafoCensurato." ".strlen($paragrafoCensurato);
?>

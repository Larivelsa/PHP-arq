<div class="titulo">Datas #02</div>
<?php
    $formatoData1='D, d \d\e M \d\e Y';
    $formatoData2='%A, %d de %B de %Y';
    $formatoDataHora='%A, %d de % B de %Y - %H:%M:%S';

    $agora=new DateTime();
    //print_r($agora);
    echo '<br>';

    setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
    date_default_timezone_set('America/Sao_Paulo');

    echo $agora->format($formatoData1).'<br>';
    setlocale(LC_TIME, 'pt_BR');
    echo strftime($formatoData2,$agora->getTimestamp()).'<br>';

    $amanha = new DateTime('+1 month');
    echo strftime($formatoData2,$amanha->getTimeStamp());

    $dataFixa = new DateTime('1975-01-25 15:30:50');

    echo strftime($formatoDataHora, $dataFixa->getTimestamp()).'<br>';

    


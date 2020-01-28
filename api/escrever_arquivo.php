<div class="titulo">Escrever arquivo</div>
<?php
    $arquivo=fopen('teste.txt','w');
    fwrite($arquivo,"Valor inicial\n");
    $str="Segunda linha\n";
    fwrite($arquivo,$str);
    fclose($arquivo);

    $arquivo = fopen('teste.txt','a');
    fwrite($arquivo, " com novos valores\n");
    
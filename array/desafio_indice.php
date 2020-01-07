<div class="titulo">Desafio Índice</div>

<?php
    $lista=array(
        1, //0
        4=>2, //4
        3=>3, //3
        'a'=>4, //a
        5, //5
        9=>'teste do 9',
        6=>'teste do 6',
        '9'=>6, //'9' -> vira inteiro e sobrescreve
        '06'=>7, //'06' -> nao sobrescreve o 6, pois não converte 06 para 6
        0=>8 //0 -> sobrescrita
        //array é sempre sequencial, não volta
    );

    print_r($lista);
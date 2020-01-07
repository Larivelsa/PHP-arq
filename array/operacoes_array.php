<div class="titulo">Operações com Array</div>
<?php
    $dados1=[
        "nome"=>"Jose",
        "idade"=>28
    ];

    $dados2=[
        "nome"=>"Maria",
        "naturalidade"=>"Fortaleza"
    ];

    $dadosCompletos=$dados1+$dados2;

    print_r($dadosCompletos);

<div class="titulo">Multidimensionais</div>
<?php
    $dados=[
        "nome"=>"Alberto",
        "idade"=>26,
        "naturalidade"=>"São Paulo",
        [
            "nome"=>"Maria",
            "idade"=>25,
            "naturalidade"=>"Bahia"
        ]
    ];

    print_r($dados);
    echo '<br>'.$dados[0]['idade'];
    echo '<br>'.$dados[1]['idade'];
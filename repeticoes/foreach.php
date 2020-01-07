<div class="titulo">Foreach</div>
<?php
    $array=['a'=>"domingo","segunda","terça",
    "quarta","quinta","sexta","sábado"];

    foreach ($array as $valor)
        echo "$valor <br>";


    echo "<hr>";

    foreach ($array as $indice=>$valor)
        echo "$indice => $valor <br>";

    echo "<hr>";

    $numeros = [1, 2 , 3, 4, 5];
    foreach($numeros as &$dobrar){
        $dobrar *= 2;
        echo "$dobrar <br>";

       //&$dobrar -> pega a referencia de memória e altera o conteudo do array
       //$dobrar -> somente o valor do array e não altera o valor do array
    }   

    print_r($numeros);
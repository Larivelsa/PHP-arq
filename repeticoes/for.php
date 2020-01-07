<div class="tiitulo">For</div>

<?php
    for($cont=1;$cont<=5;$cont++){
        echo "$cont <br>";
    }
    echo "<hr>";
    for(; $cont<=10;$cont++){
        echo "$cont <br>";

    }
    echo "<hr>";
    $array=["domingo","segunda","terça",
    "quarta","quinta","sexta","sábado"];

    for($i=0;$i<count($array);$i++){
        echo "$array[$i]<br>";
    }

    $matrix = [['a','e','i','o','u'],
    ['b','c','d']   
    
];
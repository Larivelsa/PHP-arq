<div class="titulo">Desafio For</div>
<?php
$impressao='';

    for($i=1;$i<=5;$i++){
        $impressao .='#';
        echo "$impressao <br>";
    }

    echo '<hr>';

    //.= esse sinal concatena

    for($impressao2 = '#';$impressao2!=='######';$impressao2.='#'){
        echo "$impressao2 <br>";
    }

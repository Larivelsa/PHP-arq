<div class="titulo">Desafio Pi</div>

<?php
    echo pi();
    $pi = 3.11;

    if(($pi-pi()<=0.001))
        echo "<br>Iguais";
        else
        echo "<br>Diferentes";
    
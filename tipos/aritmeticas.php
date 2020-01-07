<div class="titulo">Operações Aritméticas</div>

<?php
    echo 1 + 1, '<br>';
    var_dump(1 + 1);
    echo '<br>';
    echo 1 * 1, '<br>';
    echo 1 - 1, '<br>';
    echo 1 / 7, '<br>';
    var_dump(1 / 7);
    echo '<br>';
    
    echo intdiv(7,4),'<br>'; //trunca o resultado
    echo round(7/4),'<br>'; //arredonda o resultado
    echo 7 % 4,'<br>'; //módulo da divisão
    echo 7 / 0.001,'<br>';
    echo 4 ** 2,'<br>';

    //Procedência de operadores:
    // () => ** => / * % => + -

    echo '<p>Precedência</p>';
    echo 2 + 3 * 4;
    echo (2 + 3) * 4, '<br>';
    echo 2 + 3 * 4 ** 2, '<br>';
    echo ((2 + 3) * 4) ** 2, '<br>';
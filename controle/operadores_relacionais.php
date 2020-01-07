<div class="titulo">Operadores Relacionais</div>
<?php
    var_dump(11==11); //verifica conteúdo
    var_dump(1==='1'); // igualdade estrita - compara os tipos também além do conteúdo
    var_dump(1!=='1'); // desigualdade estrita - compara os tipos também além do conteúdo

    echo "<p class='divisao'>Relacionais no If/Else</p><hr>";

    $idade=18;

    if($idade<18)
        echo "Menor de idade";
        else if ($idade <= 65)
        echo "Adulto";
        else 
        echo "Terceira idade <br>";

    echo "<p class='divisao'>Spaceship</p><hr>";
    var_dump(5<=>3); //comparação ou ordenação entre números  
    //esquerda maior do que a direita - retorna 1
    //zero que se forem iguais
    //direita maior do que da esquerda - retorna -1 
    
    ?>


   <style>
    p{
        margin-bottom: 0px;
    }

    hr{
        margin-top: 0px;
    }
   </style>     

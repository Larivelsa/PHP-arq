<div class="titulo">Desafio Sorteio</div>

<?php
    $nomes=["Elza","Cinderela","Branca de Neve","Rapunzel"];
    //quando usa colchetes não é função de array por iso não precisa escrever antes
    //como na função ex: array(...);
    echo "<div center>{$nomes[array_rand($nomes)]}</div>";
    // colchetes para interpolar com string variaveis e função
?>

<style>
    [center]{
        display:flex;
        justify-content:center;
    }

</style>
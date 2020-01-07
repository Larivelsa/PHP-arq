<div class="titulo">Valor vs Referência</div>

<?php  
    $variavel = 'valor inicial';
    echo $variavel;

    //atribuição por valor
    $variavelValor = $variavel;
    echo "<br>$variavelValor";
    $variavelValor='novo valor';
    echo " $variavelValor";

    //atribuição por referência
    $variavelReferencia = &$variavel;
    $variavelReferencia = 'mesma referência!';
    echo "<br>$variavel";
    echo "<br>$variavelReferencia";


<div class="titulo">Switch</div>


<?php
    $preco=560000;
    $categoria="Luxo";

    switch($categoria){
        case 'Luxo':
            $carro='Mercedes';
            $preco=250000;
            break;

        case 'Sedan':
            $carro='Classic';
            $preco=55000;
            break;

        case 'SUV':
            $carro='Renegade';
            $preco=80000;
            break;

        default:
            $carro='Mobi';
            $preco=33000;
            break;   
        
            

    }


echo $precoFormatado=number_format($preco,2,',','.');    
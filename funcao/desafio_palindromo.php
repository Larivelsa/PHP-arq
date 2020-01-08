<div class="titulo">Desafio Palíndromo</div>
<?php
    //usando laço for
     
    function palindromo($palavra){
        echo strlen($palavra).'<br>';
       
        $ultimoIndice=strlen($palavra)-1; //

        for($i=0;$i<=$ultimoIndice;$i++){ //percorre o laço até 4
            echo $palavra[$i];
            if ($palavra[$i]!==$palavra[$ultimoIndice-$i]){
                
                return 'Não';
            }

        }
        return 'Sim';
    }

    echo palindromo("ararsdsaa");
    //echo palindromo("aaaah");
    
    /*
    //usando api da string
    echo palindromoSimples("arara");
    echo palindromoSimples("oie");

    function palindromoSimples($palavra){
        return $palavra===strrev($palavra) ? 'Sim':'Não';
    }*/

    $palavra="sdhfjksdnfn";
    foreach($palavra as $letras){
        echo $letras;
    }




    
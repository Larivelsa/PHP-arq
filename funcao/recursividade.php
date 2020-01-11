<div class="titulo">Recursividade</div>
<?php
    function somaUmAte($numero){
        $soma=0;

        for(/*não precisa de parametro, 
            por o valor inicial é o 
            próprio número*/;$numero>=1;$numero--){
            $soma+=$numero;
        }
        return $soma;
    }

    echo somaUmAte(5).'<br>';

    //IMPORTANTE NA RECURSIVIDADE: ter condição de parada, quebrar em problems menores
    function somaRecursivaUmAte($numero){
       
       //condição de parada
        if($numero===1) return 1;
        
        return $numero + somaRecursivaUmAte($numero-1);
    }

    echo somaRecursivaUmAte(10).'<br>';

    function somaRecursivaEconomica($numero){
        return $numero===1 ? 1 : $numero + somaRecursivaEconomica($numero-1);
    }
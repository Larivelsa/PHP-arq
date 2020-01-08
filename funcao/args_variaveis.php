<div class="titulo">Argumentos Variáveis</div>
<?php
    function soma($a,$b){
        return $a+$b;
    }

    echo soma(1,2,3,4,5,6).'<br>';

    function somaCompleta(...$numeros){
        $soma=0;
        foreach($numeros as $valores){
            $soma+=$valores;
        }
        return $soma;
    }

    echo somaCompleta(1,2,3,4,5).'<br>';

    function membros($titular,...$dependentes){
        echo "Titular: $titular <br>";
        foreach($dependentes as $dep){
            echo "Dependentes: $dep <br>";
        }
    }

    membros("Benedita","Larissa","Tatiana");

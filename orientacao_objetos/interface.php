<div class="titulo">Interface</div>
<!--   
    - classes só podem estender um classe
    - uma classe pode implementar várias interfaces
    - por padrão, são públicas-->
<?php
    interface Animal{
        function respirar();
    }

    interface Canino{
        function latir():string;
    }

    class Cachorro implements Animal, Canino{
        function respirar(){
            return "Irei usar oxigênio!";
        }

        function latir(): string{
            return 'Au Au';
        }
    }

    $animal1 = new Cachorro();
    echo $animal1->respirar().'<br>';
    echo $animal1->latir().'<br>';

    var_dump ($animal1 instanceof Cachorro);
    var_dump ($animal1 instanceof Canino);
    var_dump ($animal1 instanceof Animal);


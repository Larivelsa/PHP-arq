<div class="titulo">Desafio Sete Erros</div>
<?php
    interface Template{
        function metodo1();
        public function metodo2($parametro);
    }

    abstract class ClasseAbstrata extends Template {
        public function metodo3(){
            echo "Estou funcionando";
        }
    }

    class Classe implements ClasseAbstrata{
        function __construct($parametro){
            
        }
    }

    $exemplo=Classe();
    $exemplo.metodo3();

    //objetivo é executar o código
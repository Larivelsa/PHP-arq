<<<<<<< HEAD
<div class="titulo">Desafio Erros</div>
=======
<div class="titulo">Desafio Sete Erros</div>
>>>>>>> c0441df7a77957d6a140068f3818a36bd5bf8747
<?php
    interface Template{
        function metodo1();
        public function metodo2($parametro);
    }

<<<<<<< HEAD
    abstract class ClasseAbstrata implements Template{
        public function metodo1(){

        }
        
=======
    abstract class ClasseAbstrata extends Template {
>>>>>>> c0441df7a77957d6a140068f3818a36bd5bf8747
        public function metodo3(){
            echo "Estou funcionando";
        }
    }

<<<<<<< HEAD
    class Classe extends ClasseAbstrata{
        function __construct($parametro){

        }

        public function metodo2($parametro){

        }
    }

    $exemplo = new Classe('...');
    $exemplo->metodo3();
=======
    class Classe implements ClasseAbstrata{
        function __construct($parametro){
            
        }
    }

    $exemplo=Classe();
    $exemplo.metodo3();

    //objetivo é executar o código
>>>>>>> c0441df7a77957d6a140068f3818a36bd5bf8747

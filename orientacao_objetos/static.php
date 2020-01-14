<div class="titulo">Membros Estáticos</div>
<?php
    class A{
        public $naoStatic = 'Variável de instância (mesmo que objeto)';
        public static $static = 'Variável de classe (estática)';
        /*normalmente usa a variável estática em constantes da classe*/
        /*todas as instâncias têm acesso a variável static*/

        public function mostrarA(){
            echo "Não estática = {$this->naoStatic}<br>";
            echo "Estática = ".self::$static."<br>";

        }

        //função estática
        public static function mostrarStaticA(){
            echo "Estática = ".self::$static."<br>";
        }
    }

    //$objetoA = new A();
    //$objetoA->mostrarA();
    //$objetoA->mostrarStaticA(); //não é a forma ideal, pois é possível acessar
    //sem ter criado objetos
    A::mostrarStaticA();
    echo A::mostrarStaticA()."<br>";



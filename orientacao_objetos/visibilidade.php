<div class="titulo">Visibilidade</div>
<?php
    class A{
        public $publico='Público';
        protected $protegido='Protegido';
        private $privado = 'Privado';

        public function mostrarA(){
            echo "Classe A) Público = {$this->publico}<br>";
            echo "Classe A) Protegido = {$this->protegido}<br>";
            echo "Classe A) Privado = {$this->privado}<br>";

        }

        private function naoMostrar(){
            echo 'Não vou imprimir!';
        }
    }

    $a = new A;
    echo $a->protegido;
    $a->mostrarA().'<br>';
    $a->naoMostrar();

    class B extends A

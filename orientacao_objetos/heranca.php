<div class="titulo">Herança</div>
<?php
    class Pessoa{
        public $nome;
        public $idade;

        function __construct($nome,$idade){
            $this->nome = $nome;
            $this->idade = $idade;
            echo 'Objeto criado!<br>';
        }

        function __destruct(){
            echo 'Pessoa diz tchau!<br>';
        }

        public function apresentar(){
           echo "{$this->nome}, {$this->idade} anos <br>";
        }
    }

    class Usuario extends Pessoa{
        public $login;

        function __construct($nome, $idade, $login){
            // $this->nome=$nome;
            // $this->idade=$idade;
            parent::__construct($nome,$idade);
            $this->login=$login;
        }

        function __destruct(){
            echo 'Usuário diz tchau<br>';
            parent::__destruct();//chamando destruct da classe mãe
        }

        public function apresentar(){
            echo "@{$this->login}<br>";
            parent::apresentar(); //chama função da super classe
        }
    }

    $usuario = new Usuario ('Maria do Céu',29,'heaven'); //chamando o construtor
    $usuario->apresentar();
    unset($usuario); //para chamar o destrutor
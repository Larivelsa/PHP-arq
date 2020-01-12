<div class="titulo">Construtor & Destrutor</div>
<?php
    class Pessoa{
        public $nome;
        public $idade;

        function __construct($novoNome,$idade=18){
            echo 'Construtor invocado! <br>';
            $this->nome=$novoNome;
            $this->idade=$idade;
        }

        function __destruct(){
            echo '<br>E morreu!<br>';
        }

        public function apresentar(){
            echo "{$this->nome}, {$this->idade}";
        }
    }

    $pessoaA=new Pessoa ('Rebeca Maria',78);
    $pessoaA->apresentar();
    unset($pessoaA);
    echo '<hr>';
    $pessoaB=new Pessoa ('João Pedro');
    $pessoaB->apresentar();
    $pessoaB=null;

    
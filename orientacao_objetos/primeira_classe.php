<div class="titulo">Primeira Classe</div>

<?php
    class Cliente{
        public $nome = 'Anônimo';
        public $idade=18;

        public function apresentar(){
            return "Nome do cliente: {$this->nome}<br>";
            return "Idade do cliente: {$this->idade}<br>";
        }
    }

    $c1=new Cliente();
    $c1->apresentar();
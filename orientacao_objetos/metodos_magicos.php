<div class="titulo">Métodos Mágicos</div>
<?php
    class Pessoa{
        public $nome;
        public $idade;

    function __construct($nomee,$idadee){
        echo 'Construtor invocado<br>';
        $this->nome=$nomee;
        $this->idade=$idadee;
    }    
    function __destruct(){
        echo 'E morreu!!';
    }    

    public function __toString(){
        return "{$this->nome} tem {$this->idade} anos";
    }

    public function apresentar(){
        echo $this."<br>";
    }
    }

    $pessoa = new Pessoa('Maria',46);
    $pessoa->apresentar();
<div class="titulo">Desafio Classe</div>
<?php

    class DesafioClasse{

        public $dia=1;
        public $mes=1;
        public $ano=1970;

        public function exibir(){
            return "{$this->dia}/{$this->mes}/{$this->ano}";
        }
    }

    $objeto1=new DesafioClasse;
    $objeto2=new DesafioClasse();

    $objeto1->dia=12;
    $objeto1->mes=1;
    $objeto1->ano=2020;

    $objeto2->dia=12;
    $objeto2->mes=3;
    $objeto2->ano=1991;

    echo $objeto1->exibir(),'<br>';
    echo $objeto2->exibir();


    
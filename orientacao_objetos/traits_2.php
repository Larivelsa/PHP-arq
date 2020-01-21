<div class="titulo">Trait #2</div>
<?php
    trait validacao{
        public function validarString($str){
            return isset($str)&&$str!=='';
        }
    }

    trait validacaoMelhor{
        public function validarString($str){
            return isset($str)&&trim($str);
        }

        
    }

    class Usuario{
        use validacao,validacaoMelhor{
        validacao::validarString insteadOf validacaoMelhor;
        }
    }

    $usuario = new Usuario();
    var_dump($usuario->validarString(' '));
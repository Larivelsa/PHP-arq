<?php namespace contexto;?> <!-- precisa ser a primeira sentença de código o namespace -->

<div class="titulo">Exemplo Básico</div>

<?php 
/* constante para referenciar o namespace __NAMESPACE__*/
echo __NAMESPACE__ . '<br>';

/* declaração de constante não usa o sinal $, usa o namespace local como padrão*/
const CONSTANTE1 = 123;

/* declaração de constante com "define" precisa declarar o namespace $*/
define('contexto\CONSTANTE2',234);

define(__NAMESPACE__.'\CONSTANTE3',345);

echo CONSTANTE1 .'<br>';
echo CONSTANTE2.'<br>';

echo \contexto\CONSTANTE3.'<br>'; /**caminho absoluto */

/** name space é para também funções dentre outros */
function soma($a,$b){
   return $a + $b; 
}

echo \contexto\soma(1,2).'<br>';
echo soma(1,2).'<br>';

function strpos($str,$text){
    echo "Buscando o texto '{$text} em '{$str}'<br>";
    return 1;
}








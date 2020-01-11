<div class="titulo">Closure & Callable</div>
<?php
    $soma1=function($a,$b){
        return $a+$b;
    };

    echo $soma1(2,3).'<br>'; // aqui é chamável - callable
    echo (is_callable($soma1) ? 'Sim':'Não').'<br>';
    
    echo $soma1=1; //aqui não aponta para um chamável
    echo (is_callable($soma1) ? 'Sim':'Não').'<br>';

    //closure é o objeto que guarda a função na variável
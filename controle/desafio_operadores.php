<div class="titulo">Desafio Operadores Lógicos</div>

<form action="#" method="post">
    <div>
        <label for="t1">Trabalho 1 (Terça):</label>
        <select name="t1" id="t1">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select> 
    </div>

    <div>
        <label for="t2">Trabalho 2 (Quinta):</label>
        <select name="t2" id="t2">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select> 
    </div>

    <button>Executar</button>

</form>


<style>
    button, select{
        font-size:1.8rem;
    }

</style>
<?php
    $t1=$_POST['t1'];
    $t2=$_POST['t2'];


    if($t1&&$t2){
        echo "TV 50' e Sorvete";
    } elseif($t1||$t2){
        echo "TV 32' e Sorvete";
    }else{
        echo "No deal";
    }


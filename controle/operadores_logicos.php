<div class="titulo">Operadores Lógicos</div>
<link rel="stylesheet" href="../recursos/css/estilo.css">
<?php
    echo "<p class='divisao'>Tabela Verdade && (E)</p><hr>";
    var_dump(true && true);
    var_dump(true && false);
    var_dump(false && false);
    var_dump(false && true);
    //var_dump(true && 3>2 && 7<=7 && 3 === '3');
    
   /* var_dump(true and true);
    var_dump(true and false);
    var_dump(false and false);
    var_dump(false and true);
    var_dump(true and 3>2 and 7<=7 and 3 === '3');*/
    
    echo "<p class='divisao'>Tabela Verdade OR (OU)</p><hr>";
    var_dump(true || true);
    var_dump(true || false);
    var_dump(false || false);
    var_dump(false || true);

    /*var_dump(true or true);
    var_dump(true or false);
    var_dump(false or false);
    var_dump(false or true);*/

    echo '<p class="divisao">Tabela Verdade XOR (OU Exclusivo)</p><hr>';
    var_dump(true xor true);
    var_dump(true xor false);
    var_dump(false xor false);
    var_dump(false xor true);

    echo "<p class='divisao'>Exemplo</p><hr>";
    $idade=74;
    $sexo='F';
    if($idade>=60 && $sexo==='F'){
        echo "Pode se aposentar -> $sexo";
    }elseif($idade>=65 && $sexo==='M'){
        echo "Pode se aposentar-> $sexo";
    }else{
        echo 'Vai ter que trabalhar mais um pouco';
    }

    ?>

 <p class="divisao">teste</p>


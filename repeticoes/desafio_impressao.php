<div class="titulo">Desafio Impressão</div>

<?php
    $array=[
            "AAA",
            "BBB",
            "CCC",
            "DDD",
            "EEE",
            "FFF"];

//com for

for($i=0;$i<count($array);$i++){
    if($i%2==1) continue;

    echo "$array[$i]<br>";   
}

echo "<hr>";

//com foreach
foreach($array as $i=>$valor){
    if($i%2==1) continue;

    echo "$valor<br>"; 
}
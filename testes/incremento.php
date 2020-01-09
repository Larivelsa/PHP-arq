<?php
for($i=0;$i<=5;$i++){
echo "$i<br>";
}

echo "Exemplo com o while <br>";
 $i = 0;
 $var = 0;
while ($i < 10) {
    $var += ++$i;
    //$var += $i++;
    echo "i=  $i  | var= $var<br>";
}
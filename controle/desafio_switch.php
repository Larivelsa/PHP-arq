<div class="titulo">Desafio Switch</div>
<form action="#" method="POST">
    <input type="text" name="param">
    <select name="conversao" id="conversao">
        <option value="km-milha">KM para Milha</option>
        <option value="milha-km">Milha para KM</option>
        <option value="metro-km">Metro para KM</option>
        <option value="km-metro">KM para Metros</option>
    </select>
    <button>Calcular</button>
</form>

<style>
    font-size:1.8rem;
</style>
<?php
//$valor=1;
$tipo=$_POST['conversao'];
$valor=$_POST['param'];

switch($tipo){
    case 'km-milha':
    echo $valor/1.609; 
    break;

    case 'milha-km':
    echo $valor*1.609; 
    break;

    case 'metro-km':
    echo $valor/1000; 
    break;

    case 'km-metro':
    echo $valor*1000; 
    break;

    default:
    echo 'Nenhum valor calculado!';

}
    
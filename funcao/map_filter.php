<div class="titulo">Map & Filter</div>
<?php
    $notas=[5.8,7.3,9.8,6.7];

    $notasFinais=array_map(round,$notas);
    
    print_r($notasFinais);

    $apenasAprovados=[];

    function aprovados($notasFinais){
        return $notasFinais>=7;
    }

    $apenasAprovados=array_filter($notasFinais,aprovados);

    print_r($apenasAprovados);

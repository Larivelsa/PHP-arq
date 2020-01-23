<div class="titulo">Try/Catch</div>
<?php
    /*
    Quando trata o erro, o algoritmo não para,
    mas se não tratar dá crash
    */


    //echo 7/0;
    //echo intdiv(7,0);

    //try não precisa de condição de entrada
    // catch captura os erros - do mais específico para o mais genérico

    //try de error
    try {
        echo intdiv(7,0);
    } catch (Error $e){
        echo 'Teve um erro aqui<br>';
    }

    // errors-> erros fatais
    // exceptions -> 'burlou' as regras

    //try de exception
    try{
        throw new Exception('Erro muito estranho');
        echo intdiv(7,0);
    } catch(DivisionByZeroError $e) { //erro mais específico 
        echo 'Divisão por zero<br>';
    } catch (Throwable $e){ // throwable é genérico e pode ser error ou exception - polimorfismo
        echo 'Erro encontrado: '.$e->getMessage().'<br>';
    } finally{
        echo 'Sempre executado<br>';
    }

    echo 'Execução continua...';
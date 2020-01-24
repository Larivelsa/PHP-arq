<div class="titulo">Básico Sessão</div>
<?php
    session_start(); // inicia a sessão 

    print_r($_SESSION);
    echo '<br>';

    if(!$_SESSION['nome']){
        $_SESSION['nome'] = 'Nomeee';
    }

    if(!$_SESSION['email']){
        $_SESSION['email'] = 'nomeee@azmail.com';
    }

    print_r($_SESSION);

    ?>

<p>

    <a href='/sessao_cookie/basico_sessao_alterar.php'>
        Alterar Sessão
    </a>  

</p>
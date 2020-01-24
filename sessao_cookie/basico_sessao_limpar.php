<?php
    session_start(); // sempre que trabalha com sessao precisa usar essa função
    session_destroy();
    header('Location: basico_sessao.php');


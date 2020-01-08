<div class="titulo">Argumento Padrão</div>
<?php
    function saudacao($nome='Senhor(a)',$sobrenome='Cliente'){
        return "Bem vindo, $nome $sobrenome!<br>";
    }

   echo saudacao();
   echo saudacao(null);
   echo saudacao('Mestre','Suprema');
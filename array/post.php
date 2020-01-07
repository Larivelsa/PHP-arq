<div class="titulo">POST</div>
<form action="#" method="post">
    <input type="text" name="nome" id="">
    <input type="text" name="sobrenome" id="">
    <button>Enviar</button>
</form>

<style>
    form>*{
        font-size:1.8rem;
    }
</style>

<?php
    print_r($_POST);
    echo'<br>';
    print_r($_GET);

echo '<br>'.count($_POST);    
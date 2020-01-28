<div class="titu">Upload</div>
<?php
    print_r($_FILES);
    //print_r($_POST);
    //print_r($_GET);
    
    if($_FILES&&$_FILES['arquivo']){

        $pastaUpload='C:/Users/upload';
        $nomeArquivo=$_FILES['arquivo']['name'];
        $arquivo=$pastaUpload.$nomeArquivo;
        $tmp=$_FILES['arquivo']['tmp_name'];

        if (move_uploaded_file($tmp,$arquivo)){
            echo "Arquivo enviado com sucesso.";
        } else echo "Erro no upload do arquivo";
        
    }
?>

<form action="#" method="post" enctype="multipart/form-data">
    <input name="arquivo" type="file">
    <button>Enviar</button>
</form>
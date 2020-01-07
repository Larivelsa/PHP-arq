<div class="titulo">Tipo String</div>
<?
echo 'Sou uma String';
echo '<br>';
var_dump("Eu tambem");
echo '<br>';
echo "'Teste '".'"Teste "'.'\' Teste \''." \"Teste\""."\\";

print"<br>Também existe a função print";
print ("<br>Também existe a função print");
echo '<br>';
echo strtoupper("maximizado".'<br>');
echo strtolower("MINIMIZADO".'<br>');
echo ucfirst("só a primeira letra".'<br>');
echo ucwords("todas as palavras".'<br>');
echo strlen("Quantas letras?".'<br>');
//echo mb_strlen("Eu também","utf-8");
echo '<br>';
echo substr('Só uma parte mesmo',7,6);
echo '<br>' . str_replace('isso','aquilo','Trocar isso isso');

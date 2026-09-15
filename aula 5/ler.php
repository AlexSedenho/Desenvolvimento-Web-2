<h2>Meu Diário</h2>

<pre style="background: #f4f4f4; padding: 10px; border-radius: 5px;">
<?php 
if (file_exists("diario.md")) {
    readfile("diario.md"); 
} else {
    echo "Seu diário ainda está vazio.";
}
?>
</pre>

<br>
<a href="adicionar.php">Voltar e adicionar nova entrada</a>
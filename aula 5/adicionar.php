<?php
if (!empty($_POST["texto"])) {
    $arquivo = fopen("diario.md", "a");
    
    fwrite($arquivo, date("d/m/Y H:i") . " - " . $_POST["texto"] . "\n\n");
    
    fclose($arquivo);
    
    echo "<p style='color: green;'>Entrada salva com sucesso!</p>";
}
?>

<h2>Adicionar no Diário</h2>

<form method="post" action="adicionar.php">
    <textarea name="texto" rows="5" cols="40" placeholder="Escreva sobre o seu dia..." required></textarea><br>
    <button type="submit">Salvar</button>
</form>

<br>
<a href="ler.php">Ver meu Diário</a>
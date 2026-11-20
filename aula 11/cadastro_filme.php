<?php
session_start();
if (!isset($_SESSION['id_usuario'])) {
    echo "<a href='login.php'>Fazer Login</a>";
    exit;
}
?>
<h2>Cadastrar Filme</h2>
<form action="salva_filme.php" method="post" enctype="multipart/form-data">
    Nome do Filme: <input type="text" name="nome" required><br><br>
    Descrição: <textarea name="descricao" required></textarea><br><br>
    Foto: <input type="file" name="foto" required><br><br>
    Link do Filme: <input type="text" name="link" required><br><br>
    Classificação (digite 0 para Livre): <input type="number" name="classificacao" min="0" required><br><br>
    Sua Nota (0 a 10): <input type="number" step="0.1" name="nota_usuario" min="0" max="10" required><br><br>
    <button type="submit">Salvar Filme</button>
</form>
<br><button><a href="filmes.php">Voltar aos Filmes</a></button>
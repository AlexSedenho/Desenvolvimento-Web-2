<?php
if (isset($_GET['nome'])) {
    $nome = $_GET['nome'];
    $n1 = $_GET['n1'];
    $n2 = $_GET['n2'];
    $n3 = $_GET['n3'];
    
    $linha = "$nome - Notas: $n1, $n2, $n3\n";
    
    file_put_contents("notas.txt", $linha, FILE_APPEND);
    
    echo "<b>Notas salvas com sucesso!</b><hr>";
}
?>

<form method="GET">
    Nome: <input type="text" name="nome" required><br><br>
    Nota 1: <input type="text" name="n1" required><br><br>
    Nota 2: <input type="text" name="n2" required><br><br>
    Nota 3: <input type="text" name="n3" required><br><br>
    <button type="submit">Salvar Notas</button>
</form>
<?php
require('conexao.php');

$i = $_GET['id'];

$comando = "SELECT * FROM `ofertas` WHERE `id` = $i";

$stm = $conexao->prepare($comando);
$stm->execute();

while($resultado = $stm->fetch(PDO::FETCH_ASSOC)) {
    echo "<img src='{$resultado['foto']}' height='100px'>";
    echo "<h1>{$resultado['nome']}</h1>";
    echo "<p>{$resultado['descricao']}</p>";
    echo "<h3>{$resultado['preco']}</h3>";
    echo "<a href='{$resultado['link']}'>Comprar</a>";
}
?>

<form action="">
    <h1>Comentários</h1>
    <textarea name="comentario"></textarea>
</form>

<?php
require('conexao.php');

session_start();

$id = $_SESSION['id'];

$comando = "SELECT entregas.*, usuarios.nome AS nome_entregador FROM `entregas` LEFT JOIN `usuarios` ON entregas.id_entregador = usuarios.id WHERE entregas.id_consumidor = '$id'";

$stm = $conexao->prepare($comando);
$stm->execute();

echo "<button><a href='consumidor.php'>Voltar ao Perfil</a></button>";

$n = 1;

while($resultado = $stm->fetch(PDO::FETCH_ASSOC)) {
    echo "<h2>Pedido $n</h2>";
    echo "Dimensões do Pedido (L x A x P): ({$resultado['largura']}cm x {$resultado['altura']}cm x {$resultado['profundidade']}cm)<br>";
    echo "Peso: {$resultado['peso']} kg<br>";
    echo "Sensivel: {$resultado['sensivel']}<br>";
    echo "Status: {$resultado['status']}<br>";

    if ($resultado['status'] == 'em_rota'){
        echo "Produto será entregue por: {$resultado['nome_entregador']}<br>";
    } else if ($resultado['status'] == 'entregue') {
        echo "Produto entregue por: {$resultado['nome_entregador']}<br>";
    }

    $n++;
}
?>
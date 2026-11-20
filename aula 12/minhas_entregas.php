<?php
require('conexao.php');

session_start();

$id = $_SESSION['id'];

$comando = "SELECT `id`, `largura`, `altura`, `profundidade`, `peso`, `sensivel`, `status` FROM `entregas` WHERE `id_entregador` = '$id'";

$stm = $conexao->prepare($comando);
$stm->execute();

echo "<button><a href='entregador.php'>Voltar ao Perfil</a></button>";

$n = 1;

while($resultado = $stm->fetch(PDO::FETCH_ASSOC)) {
        echo "<h2>Pedido $n</h2>";
        echo "Dimensões do Pedido (L x A x P): ({$resultado['largura']}cm x {$resultado['altura']}cm x {$resultado['profundidade']}cm)<br>";
        echo "Peso: {$resultado['peso']} kg<br>";

        if ($resultado['sensivel'] == 'sim'){
            echo "Sensivel: {$resultado['sensivel']} (ATENÇÃO! PRODUTO SENSÍVEL)<br>";
        }else {
            echo "Sensivel: {$resultado['sensivel']}<br>";
        }
        
        echo "Status: {$resultado['status']}<br>";

        if ($resultado['status'] != 'entregue') {
            echo "<button><a href='finaliza_entrega.php?id={$resultado['id']}'>Finalizar Entrega</a></button>";
        }

        $n++;
}
?>
<?php
require('conexao.php');
session_start();

if (!isset($_SESSION['id']) || $_SESSION['tipo'] != 'gerente') {
    echo "Acesso Bloqueado!<br>";
    echo "<button><a href='login.php'>Fazer Login</a></button>";
    exit;
}

echo "Olá! Gerente! <a href='sair.php'>Sair</a><br><br>";
?>

<form action="gerente.php" method="get">
    <label for="">Filtrar por status:</label>
    <select name="status">
        <option value="todos">Todos</option>
        <option value="disponivel">Disponível</option>
        <option value="em_rota">Em Rota</option>
        <option value="entregue">Entregue</option>
        <option value="cancelado">Cancelado</option>
    </select>
    <button type="submit">Filtrar</button>
</form>

<hr>

<?php
if (isset($_GET['status']) && $_GET['status'] != 'todos') {
    $status = $_GET['status'];
    $comando = "SELECT * FROM `entregas` WHERE `status` = '$status'";
} else {
    $comando = "SELECT * FROM `entregas`";
}

$stm = $conexao->prepare($comando);
$stm->execute();

$n = 1;

while ($resultado = $stm->fetch(PDO::FETCH_ASSOC)) {
    echo "<h2>Pedido $n (ID: {$resultado['id']})</h2>";
    echo "Dimensões (L x A x P): ({$resultado['largura']}cm x {$resultado['altura']}cm x {$resultado['profundidade']}cm)<br>";
    echo "Peso: {$resultado['peso']} kg<br>";
    echo "Sensível: {$resultado['sensivel']}<br>";
    echo "Status: {$resultado['status']}<br><br>";

    if($resultado['status'] != 'cancelado'){
        echo "<button><a href='cancelar_entrega.php?id={$resultado['id']}'>Cancelar</a></button> ";
    }else{
        echo "<button>Cancelado</button> ";
    }
    
    echo "<button><a href='excluir_entrega.php?id={$resultado['id']}'>Excluir</a></button>";
    

    echo "<hr>";

    $n++;
}
?>
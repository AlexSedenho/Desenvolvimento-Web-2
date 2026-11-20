<?php
require('conexao.php');
session_start();

if (!isset($_SESSION['id'])) {
    echo "<a href='login.php'>Fazer Login</a>";
    exit;
}

$id_entrega = $_GET['id'];
$id_entregador = $_SESSION['id'];

$comando = "UPDATE `entregas` SET `id_entregador` = '$id_entregador', `status` = 'em_rota' WHERE `id` = '$id_entrega'";

$linhas = $conexao->exec($comando);

if ($linhas > 0) {
    echo "Entrega aceita com sucesso!<br><br>";
} else {
    echo "Erro ao aceitar a entrega.<br><br>";
}

echo "<button><a href='entregador.php'>Voltar ao Perfil</a></button> ";
echo " <button><a href='minhas_entregas.php'>Ver Minhas Entregas</a></button> ";
echo " <button><a href='ent_disponiveis.php'>Ver Entregas Disponíveis</a></button>";
?>
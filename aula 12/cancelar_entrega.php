<?php
require('conexao.php');
session_start();

if (!isset($_SESSION['id']) || $_SESSION['tipo'] != 'gerente') {
    echo "Acesso Bloqueado!<br>";
    echo "<button><a href='login.php'>Fazer Login</a></button>";
    exit;
}

$id_entrega = $_GET['id'];

$comando = "UPDATE `entregas` SET `status` = 'cancelado', `id_entregador` = NULL WHERE `id` = '$id_entrega'";

$linhas = $conexao->exec($comando);

if ($linhas > 0) {
    echo "Entrega cancelada com sucesso!<br><br>";
} else {
    echo "Erro ao cancelar a entrega.<br><br>";
}

echo "<button><a href='gerente.php'>Voltar ao Painel</a></button>";
?>
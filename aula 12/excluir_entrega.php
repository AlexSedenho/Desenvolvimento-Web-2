<?php
require('conexao.php');
session_start();

if (!isset($_SESSION['id']) || $_SESSION['tipo'] != 'gerente') {
    echo "Acesso Bloqueado!<br>";
    echo "<button><a href='login.php'>Fazer Login</a></button>";
    exit;
}

$id_entrega = $_GET['id'];

$comando = "DELETE FROM `entregas` WHERE `id` = '$id_entrega'";

$linhas = $conexao->exec($comando);

if ($linhas > 0) {
    echo "Entrega excluída com sucesso!<br><br>";
} else {
    echo "Erro ao excluir a entrega.<br><br>";
}

echo "<button><a href='gerente.php'>Voltar ao Painel</a></button>";
?>
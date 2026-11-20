<?php
require('conexao.php');
session_start();

if (!isset($_SESSION['id_usuario'])) {
    echo "<a href='login.php'>Fazer Login</a>";
    exit;
}

$meu_id = $_SESSION['id_usuario'];

echo "<button><a href='filmes.php'>Ver Filmes</a></button> ";
echo "<button><a href='sair.php'>Sair</a></button><hr>";

// 1. Solicitações recebidas (pendentes)
echo "<h2>Solicitações de Amizade Pendentes</h2>";
$sql_pend = "SELECT pendente.id AS id_pedido, usuarios.id AS id_solicitante, usuarios.nome 
             FROM `pendente` 
             INNER JOIN `usuarios` ON pendente.id_usuario = usuarios.id 
             WHERE pendente.id_amigo = '$meu_id'";
$stm = $conexao->prepare($sql_pend);
$stm->execute();

while ($p = $stm->fetch(PDO::FETCH_ASSOC)) {
    echo "{$p['nome']} quer ser seu amigo ";
    echo "<button><a href='aceitar_amizade.php?id_pedido={$p['id_pedido']}&id_amigo={$p['id_solicitante']}'>Aprovar</a></button><br><br>";
}

// 2. Listar outros usuários para solicitar amizade
echo "<hr><h2>Usuários do Sistema</h2>";
$sql_users = "SELECT `id`, `nome` FROM `usuarios` WHERE `id` != '$meu_id'";
$stm2 = $conexao->prepare($sql_users);
$stm2->execute();

while ($u = $stm2->fetch(PDO::FETCH_ASSOC)) {
    echo "{$u['nome']} ";
    echo "<button><a href='solicitar_amizade.php?id_amigo={$u['id']}'>Solicitar Amizade</a></button><br><br>";
}
?>
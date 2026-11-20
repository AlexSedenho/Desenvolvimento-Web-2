<?php
require('conexao.php');
session_start();

$meu_id = $_SESSION['id_usuario'];
$id_pedido = $_GET['id_pedido'];
$id_amigo = $_GET['id_amigo'];

// Salva a amizade nos dois sentidos para facilitar a busca depois
$conexao->exec("INSERT INTO `amigos` (`id_usuario`, `id_amigo`) VALUES ('$meu_id', '$id_amigo')");
$conexao->exec("INSERT INTO `amigos` (`id_usuario`, `id_amigo`) VALUES ('$id_amigo', '$meu_id')");

// Remove da tabela pendente
$conexao->exec("DELETE FROM `pendente` WHERE `id` = '$id_pedido'");

echo "Amizade aprovada!<br><br>";
echo "<button><a href='amigos.php'>Voltar</a></button>";
?>
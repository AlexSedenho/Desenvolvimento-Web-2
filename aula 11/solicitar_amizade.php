<?php
require('conexao.php');
session_start();

$meu_id = $_SESSION['id_usuario'];
$id_amigo = $_GET['id_amigo'];

$comando = "INSERT INTO `pendente` (`id_usuario`, `id_amigo`) VALUES ('$meu_id', '$id_amigo')";
$conexao->exec($comando);

echo "Solicitação enviada!<br><br>";
echo "<button><a href='amigos.php'>Voltar</a></button>";
?>
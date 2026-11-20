<?php
require('conexao.php');
session_start();

$meu_id = $_SESSION['id_usuario'];
$id_filme = $_GET['id_filme'];

$conexao->exec("INSERT INTO `curtidas` (`id_usuario`, `id_filme`) VALUES ('$meu_id', '$id_filme')");
header("Location: filmes.php");
?>
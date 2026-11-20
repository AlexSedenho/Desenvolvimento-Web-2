<?php
require('conexao.php');
session_start();

$meu_id = $_SESSION['id_usuario'];
$id_filme = $_POST['id_filme'];
$comentario = $_POST['comentario'];

$conexao->exec("INSERT INTO `comentarios` (`id_usuario`, `id_filme`, `comentario`) VALUES ('$meu_id', '$id_filme', '$comentario')");
header("Location: filmes.php");
?>
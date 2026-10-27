<?php
require('conexao.php');

$email = $_POST['email'];
$senha = $_POST['senha'];

$comando = "INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`) VALUES (NULL, '{$_POST['nome']}', '$email', '$senha')";

$linhas = $conexao->exec($comando);

if($linhas > 0){
    echo "Dados salvos!";
} else {
    echo "Erro ao salvar dados!";
}
?>
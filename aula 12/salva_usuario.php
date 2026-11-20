<?php
require('conexao.php');

$email = $_POST['email'];
$senha = $_POST['senha'];
$tipo = $_POST['escolha'];
$hash =  hash("sha256", $senha);

$comando = "INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `tipo`) VALUES (NULL, '{$_POST['nome']}', '$email', '$hash', '$tipo')";

$linhas = $conexao->exec($comando);

if($linhas > 0){
    echo "Dados salvos!";
    echo "<form action='login.php'><button type='submit'>Fazer Login</button></form>";
} else {
    echo "Erro ao salvar dados!";
}
?>
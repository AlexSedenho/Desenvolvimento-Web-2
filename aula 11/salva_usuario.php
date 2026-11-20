<?php
require('conexao.php');

$nome = $_POST['nome'];
$email = $_POST['email'];
$nascimento = $_POST['nascimento'];
$senha = hash("sha256", $_POST['senha']);

$comando = "INSERT INTO `usuarios` (`nome`, `email`, `nascimento`, `senha`) 
            VALUES ('$nome', '$email', '$nascimento', '$senha')";

$linhas = $conexao->exec($comando);

if ($linhas > 0) {
    echo "Usuário cadastrado com sucesso!<br><br>";
    echo "<button><a href='login.php'>Fazer Login</a></button>";
} else {
    echo "Erro ao cadastrar.";
}
?>
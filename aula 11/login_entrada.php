<?php
require('conexao.php');

$email = $_POST['email'];
$hash = hash("sha256", $_POST['senha']);

$comando = "SELECT `id`, `nome`, `nascimento` FROM `usuarios` WHERE `email` = '$email' AND `senha` = '$hash'";
$stm = $conexao->prepare($comando);
$stm->execute();
$resultado = $stm->fetch(PDO::FETCH_ASSOC);

if (isset($resultado['id'])) {
    session_start();

    $nasc = new DateTime($resultado['nascimento']);
    $hoje = new DateTime();
    $idade = $hoje->diff($nasc)->y;

    $_SESSION['id_usuario'] = $resultado['id'];
    $_SESSION['nome'] = $resultado['nome'];
    $_SESSION['idade'] = $idade;

    echo "Olá {$resultado['nome']} ({$idade} anos)!<br><br>";
    echo "<button><a href='filmes.php'>Ver Filmes</a></button> ";
    echo "<button><a href='cadastro_filme.php'>Cadastrar Filme</a></button> ";
    echo "<button><a href='amigos.php'>Amigos</a></button> ";
    echo "<button><a href='sair.php'>Sair</a></button>";
} else {
    echo "<h2>Usuário ou senha inválidos!</h2>";
    echo "<button><a href='login.php'>Tentar novamente</a></button>";
}
?>
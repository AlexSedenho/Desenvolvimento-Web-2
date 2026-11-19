<?php
require('conexao.php');

$email = $_POST['email'];
$senha = $_POST['senha'];
$hash =  hash("sha256", $senha);

$comando = "SELECT `id`, `nome`, `tipo` FROM `usuarios` WHERE `email` = '$email' AND `senha` = '$hash'";

$stm = $conexao->prepare($comando);
$stm->execute();

$resultado = $stm->fetch(PDO::FETCH_ASSOC);

if(isset($resultado['id'])) {
    session_start();
    $_SESSION['id'] = $resultado['id'];
    $_SESSION['nome'] = $resultado['nome'];
    $_SESSION['tipo'] = $resultado['tipo'];

    echo "Olá {$resultado['nome']}!";
    
    if (isset($resultado['tipo']) && $resultado['tipo'] == 'consumidor') {
        echo "<form action='consumidor.php'><button type='submit'>Ver Perfil</button></form>";
    }else if (isset($resultado['tipo']) && $resultado['tipo'] == 'entregador') {
        echo "<form action='entregador.php'><button type='submit'>Ver Perfil</button></form>";
    }
?>
<a href="sair.php">sair</a>
<?php
} else {
    echo "Usuário inexistente!";
?>
<a href="login.php">Fazer login</a>
<?php
}

?>
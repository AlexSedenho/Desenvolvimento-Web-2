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

    echo "Olá {$resultado['nome']}!<br><br>";
    
    if (isset($resultado['tipo']) && $resultado['tipo'] == 'consumidor')
    {
        echo "<button> <a href='consumidor.php'>Ver Perfil</a> </button>";
    }
    else if (isset($resultado['tipo']) && $resultado['tipo'] == 'entregador')
    {
        echo "<button> <a href='entregador.php'>Ver Perfil</a> </button>";
    }
    else if (isset($resultado['tipo']) && $resultado['tipo'] == 'gerente')
    {
        echo "<button> <a href='gerente.php'>Gerenciar</a> </button>";
    }

    echo "<br><br><button> <a href='sair.php'>Sair</a> </button>";

    } else {
        echo "<h2>Usuário inexistente!</h2><br>";
        echo "<button> <a href='login.php'>Fazer Login</a> </button>";
        echo " ou  <button> <a href='cadastro.php'>Fazer Cadastro</a> </button>";
    }

?>
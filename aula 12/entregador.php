<?php
    require('conexao.php');

    session_start();

    if (!isset($_SESSION['id'])) {
        echo "<a href='login.php'>Fazer Login</a>";
    }

    $id = $_SESSION['id'];
    $nome = $_SESSION['nome'];

    echo "Olá, $nome ";

    echo " <button> <a href='sair.php'>Sair</a> </button> <br><br>";

    echo "<button> <a href='ent_disponiveis.php'>Ver Entregras Disponiveis</a> </button> <br><br>";
    
    echo "<button> <a href='minhas_entregas.php'>Minhas Entregas</a> </button>";
?>
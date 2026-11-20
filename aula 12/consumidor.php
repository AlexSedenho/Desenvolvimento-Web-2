<?php
    require('conexao.php');

    session_start();

    if (!isset($_SESSION['id'])) {
        echo "<a href='login.php'>Fazer Login</a>";
    }

    $id = $_SESSION['id'];
    $nome = $_SESSION['nome'];

    echo "Olá, $nome ";

    echo " <button><a href='sair.php'>Sair</a></button><br><br>";

    echo "<button><a href='form_entrega.php'>Solicitar Entrega</a></button><br><br>";

    echo "<button><a href='acomp_entrega.php'>Acompanhar Entregas</a></button>";
?>
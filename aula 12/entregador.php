<?php
    require('conexao.php');

    session_start();

    if (!isset($_SESSION['id'])) {
        echo "<a href='login.php'>Fazer Login</a>";
    }

    $id = $_SESSION['id'];
    $nome = $_SESSION['nome'];

    echo "Olá, $nome";
?>
<?php
session_start();

if(isset($_SESSION['nome'])){
    echo "Bem Vindo! " . $_SESSION['nome'];
} else {
    echo "Faça login em: <a href='usuario.html'>Página de Login</a>";
}
?>
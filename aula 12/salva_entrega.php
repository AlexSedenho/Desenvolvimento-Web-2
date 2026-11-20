<?php
require('conexao.php');

session_start();

if(isset($_SESSION['id'])) {
    $id = $_SESSION['id'];
    $larg = $_POST['larg'];
    $alt = $_POST['alt'];
    $prof = $_POST['prof'];
    $peso = $_POST['peso'];
    $sens = $_POST['sens'];

    $comando = "INSERT INTO `entregas` (`id`, `id_consumidor`, `id_entregador`, `largura`, `altura`, `profundidade`, `peso`, `sensivel`, `status`) VALUES (NULL, '$id', NULL, '$larg', '$alt', '$prof', '$peso', '$sens', 'disponivel')";

    $linhas = $conexao->exec($comando);

    if($linhas > 0){
        echo "<h2>Entrega Solicitada!</h2>";
        echo "<button> <a href='consumidor.php'>Voltar ao Perfil</a> </button><br><br>";
        echo "<button> <a href='acomp_entrega.php'>Acompanhar Entrega</a> </button>";
    } else {
        echo "<h2>Erro ao solicitar entrega!</h2>";
        echo "<button><a href='form_entrega.php'>Tentar novamente</a></button>";
    }
} else {
    echo "<h2>Que pena! Parece que você não está conectado!</h2>";
    echo "<button> <a href='login.php'>Fazer login</a> </button>";
}
?>
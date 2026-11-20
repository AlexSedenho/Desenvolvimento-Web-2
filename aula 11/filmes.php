<?php
require('conexao.php');
session_start();

if (!isset($_SESSION['id_usuario'])) {
    echo "<a href='login.php'>Fazer Login</a>";
    exit;
}

$meu_id = $_SESSION['id_usuario'];

echo "Olá, {$_SESSION['nome']}! ";
echo "<button><a href='cadastro_filme.php'>Cadastrar Filme</a></button> ";
echo "<button><a href='amigos.php'>Amigos</a></button> ";
echo "<button><a href='sair.php'>Sair</a></button><hr>";

$sql = "SELECT filmes.*, usuarios.nome AS autor 
        FROM `filmes` 
        INNER JOIN `usuarios` ON filmes.id_usuario = usuarios.id";
$stm = $conexao->prepare($sql);
$stm->execute();

while ($f = $stm->fetch(PDO::FETCH_ASSOC)) {
    $id_filme = $f['id'];
    $id_autor = $f['id_usuario'];

    // Contar curtidas do filme
    $stm_curt = $conexao->prepare("SELECT COUNT(*) AS total FROM `curtidas` WHERE `id_filme` = '$id_filme'");
    $stm_curt->execute();
    $curtidas = $stm_curt->fetch(PDO::FETCH_ASSOC)['total'];

    // Verificar se o autor do filme é meu amigo
    $stm_amg = $conexao->prepare("SELECT * FROM `amigos` WHERE `id_usuario` = '$meu_id' AND `id_amigo` = '$id_autor'");
    $stm_amg->execute();
    $eh_amigo = $stm_amg->fetch(PDO::FETCH_ASSOC);

    echo "<h2>{$f['nome']}</h2>";
    echo "<img src='{$f['foto']}' width='150'><br>";
    echo "Postado por: {$f['autor']}<br>";
    echo "Descrição: {$f['descricao']}<br>";
    echo "Classificação: {$f['classificacao']} anos | Nota: {$f['nota_usuario']}<br>";
    echo "<a href='{$f['link']}' target='_blank'>Acessar Link</a><br><br>";

    // Curtidas
    echo "Curtidas: $curtidas ";
    echo "<button><a href='curtir.php?id_filme=$id_filme'>Curtir</a></button><br><br>";

    // Comentários (apenas em filmes de amigos)
    if ($eh_amigo) {
        echo "<strong>Comentários:</strong><br>";
        $stm_com = $conexao->prepare("SELECT comentarios.comentario, usuarios.nome 
                                      FROM `comentarios` 
                                      INNER JOIN `usuarios` ON comentarios.id_usuario = usuarios.id 
                                      WHERE comentarios.id_filme = '$id_filme'");
        $stm_com->execute();

        while ($c = $stm_com->fetch(PDO::FETCH_ASSOC)) {
            echo "- <b>{$c['nome']}:</b> {$c['comentario']}<br>";
        }

        echo "<form action='comentar.php' method='post'>
                <input type='hidden' name='id_filme' value='$id_filme'>
                <input type='text' name='comentario' placeholder='Escreva um comentário...' required>
                <button type='submit'>Comentar</button>
              </form>";
    }

    echo "<hr>";
}
?>
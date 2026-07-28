<?php
    $preco = $_GET['preco'];
    $quantidade = $_GET['quantidade'];
    $total = $preco * $quantidade;
    echo "Preço: $preco<br>";
    echo "Quantidade: $quantidade<br>";
    echo "Total: $total";
?>
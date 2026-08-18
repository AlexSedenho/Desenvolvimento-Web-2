<?php
$genero = $_GET['genero'];
$tamanho = $_GET['tamanho'];
$qtd = $_GET['qtd'];
$preco;

if($genero == "masculino") {
    $preco = 30;
} else {
    $preco = 25;
}

if($tamanho == "p") {
    $preco = $preco - 5;
} else if ($tamanho == "m") {
    $preco = $preco + 1;
} else {
    $preco = $preco + 10;
}

$preco = $preco * $qtd;
$total = $preco;

$total = $preco - ($total * (($qtd * 3) / 100));

echo "O preço final é: " . $total;
?>
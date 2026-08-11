<?php
$genero = $_GET['genero'];
$tamanho = $_GET['tamanho'];
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

echo "O preço final é: " . $preco;
?>
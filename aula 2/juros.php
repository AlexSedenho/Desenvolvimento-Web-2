<?php
    $capital = $_GET['capital'];
    $taxa = $_GET['taxa'];
    $tempo = $_GET['tempo'];

    $taxa = $taxa / 100;

    $juros = $capital * $taxa * $tempo;
    echo $juros;
?>
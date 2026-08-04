<?php
    $velo = $_GET['velo'];
    $limite = $_GET['limite'];
    
    if($velo <= $limite){
        echo "Direção Segura";
    }else{
        echo "Gerar Multa";
    }
?>
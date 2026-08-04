<?php
    $idade = $_GET['idade'];
    $membro = $_GET['membro'];
    $convidado = $_GET['convidado'];

    if($idade < 18) {
        echo "Acesso Negado";
    }else if($membro == "Sim" || $convidado == "Sim"){
        echo "Acesso Liberado";
    }else{
        echo "Acesso Negado";
    }
?>
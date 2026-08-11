<?php
$email = $_GET['email'];
$n = 0;
$p = 0;

if(isset($_GET['noticia'])){
    $n = 1;
}
if(isset($_GET['promo'])) {
    $p = 1;
}

if($n == 1 || $p == 1) {
    echo "Assinatura Concluída!";
} else {
    echo "Assinatura Recusada!";
}

?>
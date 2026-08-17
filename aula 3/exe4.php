<?php
$email = $_GET['email'];

if(isset($_GET['noticias']) || isset($_GET['promo'])) {
    
    echo "Email: ". $email . "<br>";

    if(isset($_GET['noticias'])) {
        echo "Quer receber notícias <br>";
    }
    if(isset($_GET['promo'])) {
        echo "Quer receber promoções <br>";
    }

    echo "Assinatura Concluída";
} else {
    echo "Assinatura Recusada";
}
?>

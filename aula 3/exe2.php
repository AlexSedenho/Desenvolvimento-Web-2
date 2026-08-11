<?php
$e = trim($_GET['email']);
$s = trim($_GET['senha']);

if($e == "fulano@email.com" && $s == "1234Thanos") {
    echo "Acesso Liberado";
} else {
    echo "Email ou Senha inválidos";
}
?>
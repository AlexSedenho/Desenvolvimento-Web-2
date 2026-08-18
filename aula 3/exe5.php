<?php
$texto = $_GET['texto'];
$corfundo = $_GET['corf'];
$cortexto = $_GET['cort'];

echo "<div style='background-color: $corfundo; color: $cortexto'>";
echo $texto;
echo "</div>";
?>
<?php
$v = $_GET['veiculo'];
$v = trim($v);
$v = strtolower($v);

if ($v == "onibus") {
    echo "<img src='https://paraty.com.br/wp-content/uploads/2022/03/onibus-de-turismo.jpg' width='300' height='200'>";
} else if ($v == "carro") {
    echo "<img src='https://i0.statig.com.br/bancodeimagens/9n/up/ns/9nupnsebiqso02m1u2zk8yrdb.jpg' width='300' height='200'>";
} else if ($v == "bicicleta") {
    echo "<img src='https://cdn.awsli.com.br/600x1000/2647/2647048/produto/232171778/vde-2-8xl3wsqir9.jpg' width='300' height='200'>";
} else if ($v == "aviao") {
    echo "<img src='https://cdn.panrotas.com.br/portal-panrotas-statics/media-files-cache/411873/de20aa321c10e10cb4be48856da24305copiadea320neoazulfotoluisneves31/0,0,2560,1528/1206,720,0.30/0/default.jpg' width='300' height='200'>";
} else if ($v == "canoa") {
    echo "<img src='https://m.media-amazon.com/images/I/71MEm82TyxL.jpg' width='300' height='200'>";
}
?>
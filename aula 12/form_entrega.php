<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solicitar Entrega</title>
</head>
<body>
    <h2>Solicitar uma Entrega</h2>
    <form action="salva_entrega.php" method="post">
        <label for="">Largura (cm): </label>
        <input type="number" step="any" name="larg" required><br><br>
        <label for="">Altura (cm):: </label>
        <input type="number" step="any" name="alt" required><br><br>
        <label for="">Profundidade (cm):: </label>
        <input type="number" step="any" name="prof" required><br><br>
        <label for="">Peso (kg): </label>
        <input type="number" step="any" name="peso" required><br><br>
        <label for="">Produto Frágil?</label>
        <input type="radio" name="sens" value="sim" required>
        <label for="">Sim</label>
        <input type="radio" name="sens" value="nao">
        <label for="">Não</label><br><br>

        <button>
            <a href="consumidor.php">Voltar</a>
        </button>
        <input type="submit" value="Solicitar">
    </form>
</body>
</html>
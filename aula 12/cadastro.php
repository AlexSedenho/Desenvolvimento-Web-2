<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
</head>
<body>
    <h2>Faça seu Cadastro!</h2>

    <form action="salva_usuario.php" method='post'>
        <label for="">Nome</label>
        <input type="text" name="nome" required><br>
        <label for="">Email</label>
        <input type="email" name="email" required><br>
        <label for="">Senha</label>
        <input type="password" name="senha" required><br>
        <input type="radio" name="escolha" value="consumidor" required>
        <label for="">Consumidor</label>
        <input type="radio" name="escolha" value="entregador">
        <label for="">Entregador</label><br><br>

        <input type="submit" value="Criar Conta"><br><br>
        <label for="">Já tem uma conta?</label>
        <button>
            <a href="login.php">Fazer Login</a>
        </button>
    </form>
</body>
</html>
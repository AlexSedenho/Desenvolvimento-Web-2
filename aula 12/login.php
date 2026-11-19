<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de usuário</title>
</head>
<body>
    <form action="login_entrada.php" method='post'>
        <label for="">E-mail:</label>
        <input type="email" name='email'><br>
        <label for="">Senha</label>
        <input type="password"  name='senha'><br><br>

        <input type="submit" value="Fazer Login"><br><br>

        <label for="">Não tem uma conta?</label>
        <a href="cadastro.php">Cadastrar</a>
    </form>
</body>
</html>
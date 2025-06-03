<?php
    require_once 'classes/Usuario.php';

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $usuario = new Usuario();
        $login = $usuario->validaLogin($_POST['email'], $_POST['senha']);

        if ($login) {
            header('Location: index.php');
            exit;
        } else {
            $erro = "Credenciais invalidas";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Login</h1>
    <form method="POST">
        <label for="email">Email</label>
        <input type="email" required id="email" name="email"><br>
        <label for="senha">Senha</label>
        <input type="password" required id="senha" name="senha"><br>

        <button type="submit">Entrar</button>
    </form>
    <?php if (isset($erro)): ?>
        <p><?= $erro ?></p>
    <?php endif; ?>
</body>
</html>
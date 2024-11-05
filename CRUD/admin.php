<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style-admin.css">
</head>
<body>
    <div class="login-container text-center">
        <h1>Entre como administrador</h1>
        <form action="buscar.php" method="post">
            <div class="mb-3">
                <input required placeholder="Insira seu nome" class="form-control" type="text" name="nome" id="nome">
            </div>
            <div class="mb-3">
                <input required placeholder="Insira sua senha" class="form-control" type="password" name="senha" id="senha">
            </div>
            <button class="btn btn-primary w-100" type="submit">Entrar</button>
        </form>
        <?php 
            session_start();

                if (!empty($_SESSION['erro'])) {
                echo $_SESSION['erro'];
                $_SESSION['erro'] = '';
            }
        ?>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
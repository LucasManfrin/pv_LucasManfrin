<?php 

include_once "atualizar.php";


session_start();

if (empty($_SESSION['nome'])) {
echo "<script>window.alert('Usuário não encontrado. Faça o login novamente!')</script>";
echo "<meta http-equiv='refresh' content='0; url=login.php'>";
} else {
    $dados = BuscarDados($_GET['id']);
}

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Editar</title>
<link rel="stylesheet" href="style-editar.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1>Editar os dados</h1>
    <form action="update.php" method="post" class="subscribe-form">
        <input type="nome" value="<?php echo $dados[0]['nome'];?>" id="nome" name="nome" placeholder="Seu nome" required>
        <input type="email" value="<?php echo $dados[0]['email'];?>" id="email" name="email" placeholder="Seu email principal" required>
        <input class="invisible form-control mt-2 btn btn" type="text" name="id" value="<?php echo $dados[0]['id']?>" id="">
        <button type="submit">Editar</button>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
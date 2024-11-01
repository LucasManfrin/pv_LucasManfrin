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
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h1>Editar os dados</h1>
    <form action="bd.php" method="post" class="subscribe-form">
        <input type="nome" value="<?php echo $dados[0]['nome'];?>" id="nome" name="nome" placeholder="Seu nome" required>
        <input type="email" value="<?php echo $dados[0]['email'];?>" id="email" name="email" placeholder="Seu email principal" required>
        <button type="submit">Editar</button>
    </form>
</div>
</body>
</html>
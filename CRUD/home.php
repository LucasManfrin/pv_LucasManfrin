<?php 
    include_once "buscarusuarios.php";

    
    session_start();
    if (empty($_SESSION['nome'])) {
    echo "<script>window.alert('Usuário não encontrado. Faça o login novamente!')</script>";
    echo "<meta http-equiv='refresh' content='0; url=login.php'>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h1>Entrou na página home</h1>
    <a href="sair.php">Sair</a>

    <div class="container text-center">
    <?php 
    $dados = BuscarUsuarios();
    if (!empty($_SESSION['erro'])) {
        echo $_SESSION['erro'];
        $_SESSION['erro'] = '';
    }
    ?>

    <div class="row border border-1">
        <div class="col-md-3">
            ID
        </div>
        <div class="col-md-3">
            NOME
        </div>
        <div class="col-md-3">
            E-MAIL
        </div>
        <div class="col-md-3">
            BOTÕES
        </div>
    </div>

    <?php 

    foreach ($dados as $key => $value) {
        
    echo "<div class='row border border-1'>";
        echo "<div class='col-md-3'>";
            echo $dados[$key]['id'];
        echo "</div>";
        echo "<div class='col-md-3'>";
            echo $dados[$key]['nome']; 
        echo "</div>";
        echo "<div class='col-md-3'>";
            echo $dados[$key]['email'];
        echo "</div>";
        echo "<div class='col-md-3'>";
            echo "<a class='btn btn-primary' href='editar.php?id=". $dados[$key]['id'] ."'>Editar</a>";
            echo "<a class='btn btn-danger' href='excluir.php?id=". $dados[$key]['id'] ."'>Excluir</a>";
        echo "</div>";
    echo "</div>";
    }

    ?>

    <br>
    <br>
    <br>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
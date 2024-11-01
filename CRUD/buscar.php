<?php 
print_r($_POST);

/* CONEXÃO COM BANCO DE DADOS */
$pdo = new PDO('mysql:host=localhost;dbname=crias', 'root', '');

/* PREPARAÇÃO PARA A CONSULTA COM BANCO DE DADOS */
$sql = $pdo->prepare("SELECT * FROM `cadastro` WHERE nome=? AND senha=?");

/* EXECUTA O COMANDO SQL NO BANCO DE DADOS */
$sql->execute(array($_POST['nome'], $_POST['senha']));

$dados = $sql->fetchAll(PDO::FETCH_ASSOC);

echo "<br> Dados recebidos do Banco de Dados!<br>";
print_r($dados);

if (!empty($dados)) {
    session_start();
    
    $_SESSION['nome'] = $dados[0]['nome'];
    echo "<meta http-equiv='refresh' content='0; url=home.php'>";
    
} else {
    session_start();
    $_SESSION ['erro'] = "<div class='alert alert-danger' role='alert'> Usuario ou senha não correspondem </div>";
    echo "<meta http-equiv='refresh' content='0; url=admin.php'>";

}


?>
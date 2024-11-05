<?php 

$id = $_GET['id'];

$pdo = new PDO('mysql:host=localhost;dbname=crias', 'root', '');

$sql = $pdo->prepare(" DELETE FROM `cadastro` WHERE id=?");

$sql -> execute(array($id));

session_start();
    $_SESSION['erro'] = "<div class='alert alert-danger' role='alert'> Usuario apagado com sucesso </div>";
    echo"<meta http-equiv='refresh' content='0; url=home.php'>";

?>
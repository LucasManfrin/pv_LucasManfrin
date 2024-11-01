<?php 
print_r($_POST);
echo "<br>" . $_POST['nome'];



/* CONEXÃO COM O BANCO DE DADOS */
$pdo = new PDO('mysql:host=localhost;dbname=crias', 'root', '');

/* PREPARAÇÃO PARA REALIZAR UM COMANDO SQL NO BANCO DE DADOS */
$sql = $pdo->prepare("INSERT INTO `cadastro` VALUES (null,?,?,'0',?)");

/* ENVIO DOS DADOS E GRAVAÇÃO NO BANCO DE DADOS */
$sql ->execute(array($_POST['nome'], 
                     $_POST['email'],
                     date("Y-m-d H:i:s")
));
?>
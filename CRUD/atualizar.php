<?php 
function BuscarDados($id)
{
    $pdo = new PDO('mysql:host=localhost;dbname=crias', 'root', '');
    $sql = $pdo->prepare("SELECT * FROM `cadastro` WHERE id=?");
    $sql->execute(array($id));
    $dados = $sql->fetchAll(PDO::FETCH_ASSOC);
    return $dados;
}


?>
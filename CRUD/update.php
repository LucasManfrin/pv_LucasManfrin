<?php 
    print_r($_POST);

 $pdo = new PDO('mysql:host=localhost;dbname=crias', 'root', '');

$sql = $pdo->prepare("UPDATE `cadastro` 
                        SET nome=?, 
                        email=?
                        WHERE id=?");



$sql->execute(array($_POST['nome'],
                    $_POST['email'],
                    $_POST['id']                
                ));

echo"<meta http-equiv='refresh' content='0; url=home.php'>";



?>
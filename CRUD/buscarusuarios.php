<?php 
/* PEGAR TODOS OS DADOS DOS USUARIOS DA TABELA */
function BuscarUsuarios()
{
    /* CONEXÃO COM BANCO DE DADOS */
    $pdo = new PDO('mysql:host=localhost;dbname=crias', 'root', '');
    /* COMANDO SQL PARA PESQUISAR TODOS OS USUARIOS DA TABELA */
    $sql = $pdo->prepare("SELECT * FROM `cadastro`");
    /* EXECUTA O COMANDO SELECT NO BANCO DE DADOS */
    $sql->execute(array());
    /* ORGANIZA OS DADOS DA TABELA E ARMAZENA NA VARIÁVEL DADOS */
    $dados = $sql->fetchAll(PDO::FETCH_ASSOC);

    return $dados;
}


?>
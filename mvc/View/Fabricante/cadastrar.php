<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Medicamento</title>
</head>
<body>
    <form method="post">
       <label for="nome">Nome:</label>
       <input type="text" name="nome" required><br> 
       
       <label for="telefone">Telefone:</label>
       <input type="text" name="telefone" required><br> 

       <label for="email">Email:</label>
       <input type="email" name="email" required><br>
       
       <input type="submit">
    </form>
</body>
</html>

<?php

require_once "C:/Turma2/xampp/htdocs/farmacia/mvc/DB/Database.php";
require_once "C:/Turma2/xampp/htdocs/farmacia/mvc/Controller/FabricantesController.php";

$FabricanteController = new FabricanteController($pdo);

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];


    $FabricanteController->cadastrar($nome, $telefone, $email);
    header('Location: ../../index.php');
}











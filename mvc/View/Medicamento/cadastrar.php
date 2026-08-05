<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../CSS/style.css">
    <title>Cadastrar Medicamento</title>
</head>
<body>
    <form method="post">
       <label for="nome">Nome:</label>
       <input type="text" name="nome" required><br> 
       
       <label for="preco">Preço:</label>
       <input type="number" name="preco" step="0.01" required><br> 
       
       <label for="fabricante_id">Fabricante ID:</label>
       <input type="number" name="fabricante_id" required><br>

       <input type="submit">
    </form>
</body>
</html>

<?php

require_once "C:/Turma2/xampp/htdocs/ciaFarma/mvc/DB/Database.php";
require_once "C:/Turma2/xampp/htdocs/ciaFarma/mvc/Controller/MedicamentoController.php";

$MedicamentoController = new MedicamentoController($pdo);

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nome = $_POST['nome'];
    $preco = $_POST['preco'];
    $fabricante_id = $_POST['fabricante_id'];


    $MedicamentoController->cadastrar($nome, $preco, $fabricante_id);
    header('Location: ../../index.php');
}











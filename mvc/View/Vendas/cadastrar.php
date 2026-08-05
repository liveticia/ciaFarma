<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Venda</title>
</head>
<body>
    <form method="post">
       <label for="medicamento_id">Medicamento:</label>
       <input type="number" name="medicamento_id" required><br>

       <label for="quantidade">Quantidade:</label>
       <input type="number" name="quantidade" required><br>

       <label for="valor_total">Valor Total:</label>
       <input type="number" name="valor_total" step="0.01" required><br>
       
       
       <input type="submit">
    </form>
</body>
</html>

<?php

require_once "C:/Turma2/xampp/htdocs/farmacia/mvc/DB/Database.php";
require_once "C:/Turma2/xampp/htdocs/farmacia/mvc/Controller/VendasController.php";

$VendasController = new VendasController($pdo);

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $medicamento_id = $_POST['medicamento_id'];
    $quantidade = $_POST['quantidade'];
    $valor_total = $_POST['valor_total'];


    $VendasController->cadastrar($medicamento_id, $quantidade, $valor_total);
    header('Location: ../../index.php');
}











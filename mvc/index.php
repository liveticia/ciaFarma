<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="../CSS/style.css">
     <title>Dashboard</title>

     <h1>Dashboard</h1>

     
   
</body>
</html>

<?php
require_once "DB/Database.php";
require_once "Controller/MedicamentoController.php";
require_once "Controller/FabricantesController.php";
require_once "Controller/VendasController.php";
require_once "Controller/DashboardController.php";

$controller = new DashboardController();
$medicamentoController = new MedicamentoController($pdo);
$fabricanteController = new FabricanteController($pdo);
$vendasController = new VendasController($pdo);

$medicamentos = $medicamentoController->listar();
$fabricantes = $fabricanteController->listar();
$vendas = $vendasController->listar();
$dados = $controller->index();
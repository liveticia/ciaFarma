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

$medicamentoController = new MedicamentoController($pdo);
$fabricanteController = new FabricanteController($pdo);
$vendasController = new VendasController($pdo);

if(isset($_GET['pesquisa']) && $_GET['pesquisa'] != "")
{
    $medicamentos = $medicamentoController->pesquisar($_GET['pesquisa']);
}
else
{
    $medicamentos = $medicamentoController->listar();
}
$fabricantes = $fabricanteController->listar();
$vendas = $vendasController->listar();

$totalMedicamentos = $medicamentoController->contar();
$totalFabricantes = $fabricanteController->contar();
$totalVendas = $vendasController->contar();
?>
<div class="cards">

    <div class="card">
        <h2>Medicamentos</h2>
        <p><?= $totalMedicamentos ?></p>
    </div>

    <div class="card">
        <h2>Fabricantes</h2>
        <p><?= $totalFabricantes ?></p>
    </div>

    <div class="card">
        <h2>Vendas</h2>
        <p><?= $totalVendas ?></p>
    </div>

</div>
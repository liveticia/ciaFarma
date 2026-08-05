<?php

require_once "C:/Turma2/xampp/htdocs/ciaFarma/mvc/DB/Database.php";
require_once "C:/Turma2/xampp/htdocs/ciaFarma/mvc/Controller/VendasController.php";

$VendasController = new VendasController($pdo);

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $venda = $VendasController->buscarVenda($id);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../CSS/style.css">
    <title>Editar Vendas</title>
</head>
<body>
    <form method="post">
       <label for="medicamento_id">Medicamento:</label>
       <input type="number" name="medicamento_id" value="<?=$venda['medicamento_id'];?>" required><br>

       <label for="quantidade">Quantidade:</label>
       <input type="number" name="quantidade" value="<?=$venda['quantidade'];?>" required><br>

       <label for="valor_total">Valor Total:</label>
       <input type="number" name="valor_total" step="0.01" value="<?=$venda['valor_total'];?>" required><br>

       <input type="submit">
    </form>
</body>
</html>
<?php
} else {
    header('Location: listar.php');
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $medicamento_id = $_POST['medicamento_id'];
    $quantidade = $_POST['quantidade'];
    $valor_total = $_POST['valor_total'];

    $VendasController->editar($medicamento_id, $quantidade, $valor_total, $id);

    header('Location: ../../index.php');
}

?>









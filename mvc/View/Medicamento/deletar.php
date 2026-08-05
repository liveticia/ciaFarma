<?php

require_once "C:/Turma2/xampp/htdocs/farmacia/mvc/DB/Database.php";
require_once "C:/Turma2/xampp/htdocs/farmacia/mvc/Controller/MedicamentoController.php";

$MedicamentoController = new MedicamentoController($pdo);

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $medicamento = $MedicamentoController->deletar($id);
    header('Location: ../../index.php');
} else {
    header('Location: ../../index.php');
}
?>
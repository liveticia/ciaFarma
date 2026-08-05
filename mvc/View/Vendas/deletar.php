<?php

require_once "C:/Turma2/xampp/htdocs/farmacia/mvc/DB/Database.php";
require_once "C:/Turma2/xampp/htdocs/farmacia/mvc/Controller/VendasController.php";

$VendasController = new VendasController($pdo);

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $venda = $VendasController->deletar($id);
    header('Location: ../../index.php');
} else {
    header('Location: ../../index.php');
}

?>
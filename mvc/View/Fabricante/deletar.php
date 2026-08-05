<?php

require_once "C:/Turma2/xampp/htdocs/ciaFarma/mvc/DB/Database.php";
require_once "C:/Turma2/xampp/htdocs/ciaFarma/mvc/Controller/FabricantesController.php";

$FabricanteController = new FabricanteController($pdo);

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $fabricante = $FabricanteController->deletar($id);
    header('Location: ../../index.php');
} else {
    header('Location: ../../index.php');
}
?>
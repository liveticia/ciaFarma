<?php

require_once "C:/Turma2/xampp/htdocs/farmacia/mvc/DB/Database.php";
require_once "C:/Turma2/xampp/htdocs/farmacia/mvc/Controller/FabricantesController.php";

$FabricanteController = new FabricanteController($pdo);

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $fabricante = $FabricanteController->buscarFabricante($id);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Fabricantes</title>
</head>
<body>
    <form method="post">
       <label for="nome">Nome:</label>
       <input type="text" name="nome" value="<?=$fabricante['nome'];?>" required><br> 
       
       <label for="telefone">Telefone:</label>
       <input type="text" name="telefone" value="<?=$fabricante['telefone'];?>" required><br> 

       <label for="email">Email:</label>
       <input type="email" name="email" value="<?=$fabricante['email'];?>" required><br> 

       <input type="submit">
    </form>
</body>
</html>
<?php
} else {
    header('Location: listar.php');
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];

    $FabricanteController->editar($nome, $telefone, $email, $id);

    header('Location: ../../index.php');
}

?>









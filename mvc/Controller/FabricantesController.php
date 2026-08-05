<?php
require_once "C:/Turma2/xampp/htdocs/ciaFarma/mvc/Model/FabricanteModel.php";
class FabricanteController {
    private $fabricanteModel;
   
    public function __construct($pdo) {
        $this->fabricanteModel = new FabricanteModel($pdo);

    }
    public function listar() {
        $fabricantes = $this->fabricanteModel->buscarTodos();
        include_once "C:/Turma2/xampp/htdocs/ciaFarma/mvc/View/Fabricante/listar.php";
        return;
    }

    public function buscarFabricante($id){
        $fabricante = $this->fabricanteModel->buscarFabricante($id);
        return $fabricante;
    }

    public function cadastrar($nome, $telefone, $email) {
        $this->fabricanteModel->cadastrar($nome, $telefone, $email);
    }

    public function editar($nome, $telefone, $email, $id){
        $this->fabricanteModel->editar($nome, $telefone, $email, $id);

    }

    public function deletar($id){
        $fabricante = $this->fabricanteModel->deletar($id);
        return $fabricante;
    }

}









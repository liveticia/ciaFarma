<?php
require_once "C:/Turma2/xampp/htdocs/ciaFarma/mvc/Model/MedicamentoModel.php";
class MedicamentoController {
    private $medicamentoModel;
   
    public function __construct($pdo) {
        $this->medicamentoModel = new MedicamentoModel($pdo);

    }
    public function listar() {
        $medicamentos = $this->medicamentoModel->buscarTodos();
        include_once "C:/Turma2/xampp/htdocs/ciaFarma/mvc/View/Medicamento/listar.php";
        return;
    }

    public function buscarMedicamento($id){
        $medicamento = $this->medicamentoModel->buscarMedicamento($id);
        return $medicamento;
    }

    public function cadastrar($nome, $preco, $fabricante_id) {
        $this->medicamentoModel->cadastrar($nome, $preco, $fabricante_id);
    }

    public function editar($nome,$preco, $fabricante_id, $id){
        $this->medicamentoModel->editar($nome, $preco, $fabricante_id, $id);

    }

    public function deletar($id){
        $medicamento = $this->medicamentoModel->deletar($id);
        return $medicamento;
    }

}









<?php
require_once "C:/Turma2/xampp/htdocs/ciaFarma/mvc/Model/VendasModel.php";
class VendasController {
    private $vendasModel;
   
    public function __construct($pdo) {
        $this->vendasModel = new VendasModel($pdo);

    }
    public function listar() {
        $vendas = $this->vendasModel->buscarTodos();
        include_once "C:/Turma2/xampp/htdocs/ciaFarma/mvc/View/Vendas/listar.php";
        return;
    }

    public function buscarVenda($id){
        $venda = $this->vendasModel->buscarVenda($id);
        return $venda;
    }

    public function cadastrar($medicamento_id, $quantidade, $valor_total) {
        $this->vendasModel->cadastrar($medicamento_id, $quantidade, $valor_total);
    }

    public function editar($medicamento_id, $quantidade, $valor_total, $id){
        $this->vendasModel->editar($medicamento_id, $quantidade, $valor_total, $id);

    }

    public function deletar($id){
        $venda = $this->vendasModel->deletar($id);
        return $venda;
    }

}







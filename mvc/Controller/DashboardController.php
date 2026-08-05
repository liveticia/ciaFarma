<?php

require_once "C:/Turma2/xampp/htdocs/ciaFarma/mvc/Model/DashboardModel.php";

class DashboardController
{
    private $model;

    public function __construct()
    {
        $this->model = new DashboardModel();
    }

    public function index()
    {
        $dados = [
            "medicamentos" => $this->model->totalMedicamentos(),
            "fabricantes" => $this->model->totalFabricantes(),
            "vendas" => $this->model->totalVendas(),
            "faturamento" => $this->model->faturamento(),
            "ultimas" => $this->model->ultimasVendas()
        ];

        return $dados;
    }
}
<?php

require_once "C:/Turma2/xampp/htdocs/ciaFarma/mvc/DB/Database.php";

class DashboardModel
{
    private $pdo;

    public function __construct()
    {
        global $pdo;
        $this->pdo = $pdo;
    }

    public function totalMedicamentos()
    {
        $sql = $this->pdo->query("SELECT COUNT(*) AS total FROM medicamentos");
        return $sql->fetch(PDO::FETCH_ASSOC)['total'];
    }

    public function totalFabricantes()
    {
        $sql = $this->pdo->query("SELECT COUNT(*) AS total FROM fabricantes");
        return $sql->fetch(PDO::FETCH_ASSOC)['total'];
    }

    public function totalVendas()
    {
        $sql = $this->pdo->query("SELECT COUNT(*) AS total FROM vendas");
        return $sql->fetch(PDO::FETCH_ASSOC)['total'];
    }

    public function faturamento()
    {
        $sql = $this->pdo->query("SELECT SUM(valor_total) AS total FROM vendas");
        $resultado = $sql->fetch(PDO::FETCH_ASSOC);

        return $resultado['total'] ?? 0;
    }

    public function ultimasVendas()
    {
        $sql = $this->pdo->query("
            SELECT *
            FROM vendas
            ORDER BY id DESC
            LIMIT 5
        ");

        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }
}
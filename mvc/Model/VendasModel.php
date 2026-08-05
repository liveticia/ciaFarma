<?php
class VendasModel {
    private $pdo;
    public function __construct(PDO $pdo){
        $this->pdo = $pdo;
    }

    public function buscarTodos(){
        $stmt = $this->pdo->query("SELECT * FROM vendas");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function buscarVenda($id){
        $stmt = $this->pdo->query("SELECT * FROM vendas WHERE id = $id");
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function cadastrar($medicamento_id, $quantidade, $valor_total) {
        $sql = "INSERT INTO vendas (medicamento_id, quantidade, valor_total) VALUES (:medicamento_id, :quantidade, :valor_total)";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([
            ':medicamento_id' => $medicamento_id,
            ':quantidade' => $quantidade,
            ':valor_total' => $valor_total
        ]);
    }
    public function editar($medicamento_id, $quantidade, $valor_total, $id) {
        $sql = "UPDATE vendas SET medicamento_id=?, quantidade=?, valor_total=? WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([$medicamento_id, $quantidade, $valor_total, $id]);
    }

    public function deletar($id) {
        $sql = "DELETE FROM vendas WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([$id]);
    }
    


public function totalMedicamentos()
{
    $sql = $this->pdo->query("SELECT COUNT(*) as total FROM medicamentos");
    return $sql->fetch()['total'];
}

public function totalFabricantes()
{
    $sql = $this->pdo->query("SELECT COUNT(*) as total FROM fabricantes");
    return $sql->fetch()['total'];
}

public function totalVendas()
{
    $sql = $this->pdo->query("SELECT COUNT(*) as total FROM vendas");
    return $sql->fetch()['total'];
}

public function faturamento()
{
    $sql = $this->pdo->query("SELECT SUM(valor_total) as total FROM vendas");
    return $sql->fetch()['total'];
}

public function contar()
{
    $sql = $this->pdo->query("SELECT COUNT(*) AS total FROM vendas");
    $resultado = $sql->fetch(PDO::FETCH_ASSOC);

    return $resultado['total'];
}
    
}
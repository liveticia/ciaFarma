<?php
class MedicamentoModel {
    private $pdo;
    public function __construct(PDO $pdo){
        $this->pdo = $pdo;
    }

    public function buscarTodos(){
        $stmt = $this->pdo->query("SELECT * FROM medicamentos");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function buscarMedicamento($id){
        $stmt = $this->pdo->query("SELECT * FROM medicamentos WHERE id = $id");
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function cadastrar($nome, $preco, $fabricante_id) {
        $sql = "INSERT INTO medicamentos (nome, preco, fabricante_id) VALUES (:nome, :preco, :fabricante_id)";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([
            ':nome' => $nome,
            ':preco' => $preco,
            ':fabricante_id' => $fabricante_id
        ]);
    }
    public function editar($nome, $preco, $fabricante_id, $id) {
        $sql = "UPDATE medicamentos SET nome=?, preco=?, fabricante_id=? WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([$nome, $preco, $fabricante_id, $id]);
    }

    public function deletar($id) {
        $sql = "DELETE FROM medicamentos WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([$id]);
    }

    public function pesquisar($palavra)
{
    $sql = $this->pdo->prepare("
        SELECT *
        FROM medicamentos
        WHERE nome LIKE ?
    ");

    $sql->execute(["%$palavra%"]);

    return $sql->fetchAll(PDO::FETCH_ASSOC);
}

public function contar()
{
    $sql = $this->pdo->query("SELECT COUNT(*) AS total FROM medicamentos");
    $resultado = $sql->fetch(PDO::FETCH_ASSOC);

    return $resultado['total'];
}
    
}
<?php
class FabricanteModel {
    private $pdo;
    public function __construct(PDO $pdo){
        $this->pdo = $pdo;
    }

    public function buscarTodos(){
        $stmt = $this->pdo->query("SELECT * FROM fabricantes");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function buscarFabricante($id){
        $stmt = $this->pdo->query("SELECT * FROM fabricantes WHERE id = $id");
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function cadastrar($nome, $telefone, $email) {
        $sql = "INSERT INTO fabricantes (nome, telefone, email) VALUES (:nome, :telefone, :email)";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([
            ':nome' => $nome,
            ':telefone' => $telefone,
            ':email' => $email
        ]);
    }
    public function editar($nome, $telefone, $email, $id) {
        $sql = "UPDATE fabricantes SET nome=?, telefone=?, email=? WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([$nome, $telefone, $email, $id]);
    }

    public function deletar($id) {
        $sql = "DELETE FROM fabricantes WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([$id]);
    }
    
}
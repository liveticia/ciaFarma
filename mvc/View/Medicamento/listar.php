<?php

if (empty($medicamentos)) {
    echo "<p>Nenhum Medicamento encontrado!</p>";
    echo "<a href='View/Medicamento/cadastrar.php'>Cadastrar</a>";
    return;
}

echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr><td><a href='View/Medicamento/cadastrar.php'>Cadastrar</a></td></tr>";
echo "<tr><th>ID</th><th>Nome</th><th>Preço</th><th>Fabricante ID</th><th>Ações</th></tr>";

foreach ($medicamentos as $medicamento) {
    $id = $medicamento['id'];
    echo "<tr>";
    echo "<td>{$id}</td>";
    echo "<td>{$medicamento['nome']}</td>";
    echo "<td>{$medicamento['preco']}</td>";
    echo "<td>{$medicamento['fabricante_id']}</td>";
    echo "<td>
                <a href='View/Medicamento/editar.php?id={$id}'>Editar</a> |
                <a href='View/Medicamento/deletar.php?id={$id}' onclick=\"return confirm('Tem certeza que deseja excluir este medicamento?')\">Deletar</a>
            </td>";
    echo "</tr>";
}
echo "</table>";

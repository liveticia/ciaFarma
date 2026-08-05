<?php

if (empty($vendas)) {
    echo "<p>Nenhuma Venda encontrada!</p>";
    echo "<a href='View/Vendas/cadastrar.php'>Cadastrar</a>";
    return;
}

echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr><td><a href='View/Vendas/cadastrar.php'>Cadastrar</a></td></tr>";
echo "<tr><th>ID</th><th>Medicamento</th><th>Quantidade</th><th>Valor Total</th><th>Ações</th></tr>";

foreach ($vendas as $venda) {
    $id = $venda['id'];
    echo "<tr>";
    echo "<td>{$id}</td>";
    echo "<td>{$venda['medicamento_id']}</td>";
    echo "<td>{$venda['quantidade']}</td>";
    echo "<td>{$venda['valor_total']}</td>";
    echo "<td>
                 <a href='View/Vendas/editar.php?id={$id}'>Editar</a> |
                <a href='View/Vendas/deletar.php?id={$id}' onclick=\"return confirm('Tem certeza que deseja excluir esta venda?')\">Deletar</a>
            </td>";
    echo "</tr>";
}
echo "</table>";

<?php

if (empty($fabricantes)) {
    echo "<p>Nenhum Fabricante encontrado!</p>";
    echo "<a href='View/Fabricante/cadastrar.php'>Cadastrar</a>";
    return;
}

echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr><td><a class='btn btn-primary' href='View/Fabricante/cadastrar.php'>Cadastrar</a></td></tr>";
echo "<tr><th>ID</th><th>Nome</th><th>Telefone</th><th>Email</th><th>Ações</th></tr>";

foreach ($fabricantes as $fabricante) {
    $id = $fabricante['id'];
    echo "<tr>";
    echo "<td>{$id}</td>";
    echo "<td>{$fabricante['nome']}</td>";
    echo "<td>{$fabricante['telefone']}</td>";
    echo "<td>{$fabricante['email']}</td>";
    echo "<td>
                 <a class='btn btn-secondary' href='View/Fabricante/editar.php?id={$id}'>Editar</a> |
                <a class='btn btn-danger' href='View/Fabricante/deletar.php?id={$id}' onclick=\"return confirm('Tem certeza que deseja excluir este fabricante?')\">Deletar</a>
            </td>";
    echo "</tr>";
}
echo "</table>";

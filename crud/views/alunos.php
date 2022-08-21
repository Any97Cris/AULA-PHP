<a href="?pagina=inserir_aluno" class="btnInserir">Novo Aluno</a>
<hr>
<br>

<table>
    <tr>
        <th>Alunos</th>
        <th>Data Nascimento</th>
        <th>Editar</th>
        <th>Deletar</th>
    </tr>
    <?php while ($linha = mysqli_fetch_array($conect_alunos)) { ?>
        <tr>
            <td><?= $linha['nome_aluno'] ?></td>
            <td><?= $linha['data_nasc'] ?></td>
            <td><a href="?pagina=inserir_aluno&editar=<?= $linha['id_alunos'] ?>">Editar</a></td>
            <td><a href="deleta_aluno.php?id_alunos=<?= $linha['id_alunos'] ?>">Deletar</a></td>
        </tr>
    <?php } ?>
</table>
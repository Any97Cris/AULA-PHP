<a href="?pagina=inserir_matricula">Inserir Matricula</a>

<table>
    <tr>
        <th>Alunos</th>
        <th>Cursos</th>
        <th>Deletar</th>
    </tr>
    <?php while ($linha = mysqli_fetch_array($conect_mat)) { ?>
        <tr>
            <td><?= $linha['nome_aluno'] ?></td>
            <td><?= $linha['nome_curso'] ?></td>
            <td><a href="deleta_matricula.php?id_aluno_curso=<?= $linha['id_alunos_cursos'] ?>">Deletar</a></td>
        </tr>
    <?php } ?>
</table>
<a href="?pagina=inserir_curso">Novo Curso</a>
<hr>
<br>

<table>
    <!--Titulo Tabela -->
    <tr>
        <th>Cursos</th>
        <th>Carga Horaria</th>
        <th>Editar</th>
        <th>Deletar</th>
    </tr>
    <!--Corpo Tabela -->
    <?php while ($linha = mysqli_fetch_array($conect)) { ?>
        <tr>
            <td><?= $linha['nome_curso'] ?></td>
            <td><?= $linha['carga_horaria'] ?></td>
            <td><a href="?pagina=inserir_curso&editar=<?= $linha['id_cursos'] ?>">Editar</a></td>
            <td><a href="deleta_curso.php?id_curso=<?= $linha['id_cursos'] ?>">Deletar</a></td>
        </tr>
    <?php } ?>
</table>
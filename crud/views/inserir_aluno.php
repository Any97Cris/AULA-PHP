<?php if (!isset($_GET['editar'])) { ?>
    <h3 style="margin-bottom: 40px;">Inserir Alunos</h3>

    <form method="POST" action="processa_alunos.php">
        <input type="text" name="nome_aluno" placeholder="Aluno">
        <input type="text" name="data_nasc" placeholder="Data Nascimento" style="margin-bottom: 30px;"><br>
        <input type="submit" value="Enviar">
    </form>
<?php } else { ?>
    <?php while ($linha = mysqli_fetch_array($conect_alunos)) { ?>
        <?php if ($linha['id_alunos'] == $_GET['editar']) { ?>
            <h3 style="margin-bottom: 40px;">Editar Alunos</h3>
            <form method="POST" action="editar_aluno.php">
                <input type="hidden" name="id_alunos" value="<?= $linha['id_alunos'] ?>">
                <input type="text" name="nome_aluno" value="<?= $linha['nome_aluno'] ?>">
                <input type="text" name="data_nasc" value="<?= $linha['data_nasc'] ?>"><br>
                <br>
                <br>
                <input type="submit" value="Enviar">
            </form>
        <?php } ?>
    <?php } ?>
<?php } ?>
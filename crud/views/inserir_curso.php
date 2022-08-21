<?php if (!isset($_GET['editar'])) { ?>
    <h3>Cadastrar Curso</h3>
    <hr>
    <br>
    <form method="POST" action="processa_curso.php">
        <input type="text" name="nome_curso" placeholder="Curso">
        <input type="text" name="carga_horaria" placeholder="Carga Horária">

        <input type="submit" value="Enviar">
    </form>
<?php } else { ?>
    <?php while ($linha = mysqli_fetch_array($conect)) { ?>
        <?php if ($linha['id_cursos'] == $_GET['editar']) { ?>
            <h3>Editar Curso</h3>
            <hr>
            <br>
            <form action="editar_curso.php" method="POST">
                <input type="hidden" name="id_cursos" value="<?= $linha['id_cursos'] ?>">
                <input type="text" name="nome_curso" value="<?= $linha['nome_curso'] ?>">
                <input type="text" name="carga_horaria" value="<?= $linha['carga_horaria'] ?>">

                <input type="submit" value="Enviar">
            </form>
        <?php } ?>
    <?php } ?>
<?php } ?>
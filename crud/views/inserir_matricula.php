<h3 style="margin-bottom: 50px;">Inserir Nova Matricula</h3>

<form method="POST" action="processa_matricula.php">
    <label>Selecione um Aluno</label><br>
    <select name="escolha_aluno" style="width: 40%;padding:1%;font-size:15px;margin-bottom:30px;margin-top:5px;background-color:white;border-radius:20px;cursor: pointer;">
        <option>Aluno</option>
        <?php while ($linha = mysqli_fetch_array($conect_alunos)) { ?>
            <option value="<?= $linha['id_alunos'] ?>"><?= $linha['nome_aluno'] ?></option>

        <?php } ?>
    </select><br>
    <label>Selecione o Curso</label><br>
    <select name="escolha_curso" style="width: 40%;padding:1%;font-size:15px;margin-bottom:30px;margin-top:5px;background-color:white;border-radius:20px;cursor: pointer;">
        <option>Curso</option>
        <?php while ($linha = mysqli_fetch_array($conect)) { ?>
            <option value="<?= $linha['id_cursos'] ?>"><?= $linha['nome_curso'] ?></option>

        <?php } ?>
    </select><br>

    <input type="submit" value="Enviar" style="padding:1%;cursor: pointer;">
</form>
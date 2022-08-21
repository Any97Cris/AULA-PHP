<?php
include 'database.php';

$nomeAluno = $_POST['escolha_aluno'];
$nomeCurso = $_POST['escolha_curso'];

$query_matricula = "INSERT INTO aula_php.alunos_cursos(id_alunos, id_cursos) VALUES($nomeAluno,$nomeCurso)";
$conectar = mysqli_query($conexao, $query_matricula);

if ($conectar) {
    header('Location: index.php?pagina=matriculas');
} else {
    echo 'Ocorreu um erro';
}

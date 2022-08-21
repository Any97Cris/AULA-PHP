<?php
include 'database.php';

$id_mat = $_GET['id_aluno_curso'];

$query_deleta_mat = "DELETE FROM aula_php.alunos_cursos WHERE id_alunos_cursos = $id_mat";
$conecta = mysqli_query($conexao, $query_deleta_mat);


if ($conecta) {
    header('Location: index.php?pagina=matriculas');
} else {
    echo 'Erro!';
}

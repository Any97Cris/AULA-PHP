<?php

include 'database.php';

$id_curso = $_POST['id_cursos'];
$nome_curso = $_POST['nome_curso'];
$carga_horario = $_POST['carga_horaria'];

$query_editar_curso = "UPDATE cursos SET nome_curso = '$nome_curso', carga_horaria = $carga_horario WHERE id_cursos = $id_curso";
$conectar = mysqli_query($conexao, $query_editar_curso);

if ($conectar) {
    header('Location: index.php?pagina=cursos');
} else {
    echo 'Ocorreu um erro!';
}

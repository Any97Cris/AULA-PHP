<?php
include 'database.php';

$nome_curso = $_POST['nome_curso'];
$carga_horario = $_POST['carga_horaria'];

$query = "INSERT into cursos(nome_curso, carga_horaria) values ('$nome_curso', $carga_horario)";
$conecta = mysqli_query($conexao, $query);


if ($conecta) {
    header('Location: index.php?pagina=cursos');
} else {
    echo 'Ocorreu um erro';
}

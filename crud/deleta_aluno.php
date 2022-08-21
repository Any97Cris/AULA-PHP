<?php
include 'database.php';

$deleta_aluno = $_GET['id_alunos'];

$query_deleta_aluno = "DELETE FROM alunos WHERE id_alunos = $deleta_aluno";
$conecta = mysqli_query($conexao, $query_deleta_aluno);

if ($conecta) {
    header('Location: index.php?pagina=alunos');
} else {
    echo 'Ocorreu um erro!';
}

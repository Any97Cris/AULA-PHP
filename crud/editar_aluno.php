<?php

include 'database.php';

$idAlunos = $_POST['id_alunos'];
$nomeAlunos = $_POST['nome_aluno'];
$dataNasc = $_POST['data_nasc'];

$query_editar_alunos = "UPDATE aula_php.alunos SET nome_aluno = '$nomeAlunos', data_nasc = '$dataNasc' WHERE id_alunos = $idAlunos";
$conecta_editar = mysqli_query($conexao, $query_editar_alunos);

if ($conecta_editar) {
    header('Location: index.php?pagina=alunos');
} else {
    echo 'Ocorreu um erro!';
}

<?php
include 'database.php';

$nome_alunos = $_POST['nome_aluno'];
$dataNasc = $_POST['data_nasc'];

$query_inserir_alunos = "INSERT INTO aula_php.alunos(nome_aluno, data_nasc) VALUES ('$nome_alunos', '$dataNasc')";
$conecta = mysqli_query($conexao, $query_inserir_alunos);

if ($conecta) {
    header('Location: index.php?pagina=alunos');
} else {
    echo 'ocorreu um erro!';
}

<?php
include 'database.php';

$id_delete = $_GET['id_curso'];

$query_deleta = "DELETE FROM cursos WHERE id_cursos = $id_delete";
$conecta = mysqli_query($conexao, $query_deleta);

if ($conecta) {
    header('Location: index.php?pagina=cursos');
} else {
    echo 'Erro!';
}

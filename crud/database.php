<?php
$servidor = 'localhost';
$senha = '';
$usuario = 'root';
$database = 'aula_php';

$conexao = mysqli_connect($servidor, $usuario, $senha, $database);


#Listar Tabela Cursos
$query = 'SELECT * FROM aula_php.cursos';
$conect = mysqli_query($conexao, $query);


#Listar Tabela Alunos
$query_alunos = 'SELECT * FROM aula_php.alunos';
$conect_alunos = mysqli_query($conexao, $query_alunos);

#Listar Tabela Matriculas
$query_mat = 'SELECT id_alunos_cursos,nome_aluno, nome_curso
              FROM aula_php.alunos, aula_php.cursos, aula_php.alunos_cursos
              Where alunos_cursos.id_alunos = alunos.id_alunos
              AND alunos_cursos.id_cursos = cursos.id_cursos';
$conect_mat = mysqli_query($conexao, $query_mat);

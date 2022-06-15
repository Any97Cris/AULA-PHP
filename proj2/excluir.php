<?php

require_once 'database.php';
require_once 'dao/UsuarioDAOMySQL.php';

$usuarioDAO = new UsuarioDAOMySQL($pdo);

$id = filter_input(INPUT_GET, 'id');

if ($id) {
    $usuarioDAO->delete($id);
}

header("Location: index.php");
exit;

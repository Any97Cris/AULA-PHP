<?php

require 'database.php';

$id = filter_input(INPUT_POST, 'id');
$name = filter_input(INPUT_POST, 'nome');
$sobrenome = filter_input(INPUT_POST, 'sobrenome');
$email = filter_input(INPUT_POST, 'email');

if ($name && $sobrenome && $email) {

    $sql = $pdo->prepare("UPDATE usuarios SET nome = :name, sobrenome = :sobrenome, email = :email WHERE id = :id");
    $sql->bindValue(':name', $name);
    $sql->bindValue(':sobrenome', $sobrenome);
    $sql->bindValue(':email', $email);
    $sql->bindValue(':id', $id);
    $sql->execute();

    header('Location: index.php');
    exit;
} else {
    header("Location: adicionar.php");
    exit;
}

<?php

require 'database.php';

$name = filter_input(INPUT_POST, 'nome');
$sobrenome = filter_input(INPUT_POST, 'sobrenome');
$email = filter_input(INPUT_POST, 'email');

if ($name && $sobrenome && $email) {

    $sql = $pdo->prepare("SELECT * FROM usuarios WHERE email = :email");
    $sql->bindValue(':email', $email);
    $sql->execute();

    if ($sql->rowCount() === 0) {
        $sql = $pdo->prepare("INSERT INTO usuarios (nome, sobrenome, email) VALUES (:name, :sobrenome, :email)");
        $sql->bindValue(':name', $name);
        $sql->bindValue(':sobrenome', $sobrenome);
        $sql->bindValue(':email', $email);
        $sql->execute();

        header("Location: index.php");
        exit;
    } else {
        header("Location: adicionar.php");
        exit;
    }
} else {
    header("Location: adicionar.php");
    exit;
}

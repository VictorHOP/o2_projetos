<?php
require 'config.php';

$titulo = filter_input(INPUT_POST, 'titulo');
$data = filter_input(INPUT_POST, 'data');
$categoria = filter_input(INPUT_POST, 'categoria');
$texto = filter_input(INPUT_POST, 'texto');
$autor = filter_input(INPUT_POST, 'autor');


if ($titulo && $data && $categoria && $texto && $autor) {




    $sql = $pdo->prepare("INSERT INTO victor (titulo, data, categoria, texto, autor) VALUES (:titulo, :data, :categoria, :texto, :autor)");
    $sql->bindValue(':titulo', $titulo);
    $sql->bindValue(':data', $data);
    $sql->bindValue(':categoria', $categoria);
    $sql->bindValue(':texto', $texto);
    $sql->bindValue(':autor', $autor);
    if ($sql->execute()) {
        header("location: listar.php");
        exit;
    } else {
        header("Location: listar.php");
        exit;
    }
}

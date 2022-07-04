<!-- 
// require 'config.php';

// $id = $_GET['id'];
// $titulo = filter_input(INPUT_POST, 'titulo');
// $data = filter_input(INPUT_POST, 'data');
// $categoria = filter_input(INPUT_POST, 'categoria');
// $texto = filter_input(INPUT_POST, 'texto');



// if ($id && $titulo && $data && $categoria && $texto) {


//     $sql = $pdo->prepare("UPDATE victor SET titulo = :titulo, data = :data, categoria = :categoria, texto = :texto WHERE id = :id");
//     $sql->bindValue(':titulo', $titulo);
//     $sql->bindValue(':data', $data);
//     $sql->bindValue(':categoria', $categoria);
//     $sql->bindValue(':texto', $texto);
//     if($sql->execute()){

//     header("Location: listar.php");
//     exit;
//     }
//     else {
//     header("Location: listar.php");
//     exit;
//     } -->

<?php

function Upload($file)
{
  if (!$file['name'])
    return false;
  // Upload da imagem
  $newName = date('d_Y_h_i_s') . $file['name'];
  $diretorio = "./diretorio/";
  $url = $diretorio . $newName;
  move_uploaded_file($file["tmp_name"], $url);
  return $url;
}

include "config.php";

$id = $_GET['id'];
$titulo = $_POST['titulo'];
$data = $_POST['data'];
$categoria = $_POST['categoria'];
$texto = $_POST['texto'];


$sql = $pdo->prepare("UPDATE victor SET titulo=?,data=?,categoria=?,texto=? WHERE id=?");
if ($sql->execute([$titulo, $data, $categoria, $texto, $id])) {
  header("Location: listar.php");
  exit;
} else {
  header("Location: listar.php");
  exit;
}

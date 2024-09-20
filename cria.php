<?php
session_start();
include 'produto.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $produto = new Produto($_POST['nome'], $_POST['descricao'], $_POST['valor'], $_POST['imagem']);
    $_SESSION['produtos'][] = serialize($produto);
    header('Location: mostra.php');
    exit();
} else {
    header('Location: novo.php');
    exit();
}
?>

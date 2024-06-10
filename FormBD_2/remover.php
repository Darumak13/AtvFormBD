<?php 

    include 'conexao.php';
    $id = $_GET['id'];
    $sql = "DELETE FROM cadastros WHERE id='$id'";

    $resultado = $conn->query($sql);

    header('Location: cadastro.php')
?>
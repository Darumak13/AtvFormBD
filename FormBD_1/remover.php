<?php 

    include 'conexao.php';

    $id = $_GET['id'];
    $sql = "DELETE FROM contatos WHERE id='$id'";
    
    $resultado = $conn->query($sql);

    header('Location: contato.php')
?>
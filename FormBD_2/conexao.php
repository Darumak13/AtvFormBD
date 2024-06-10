<?php 
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "formulario_cadastro";

    $conn = new mysqli($servidor, $usuario, $senha, $banco);

    if ($conn->connect_error) { 
        die("ERRO CONEXÃO". $conn->connect_error);
    }
?>
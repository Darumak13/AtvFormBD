<?php 

    if($_SERVER['REQUEST_METHOD'] == "POST") {

        include 'conexao.php';

        $nome = $_POST['nome'];
        $idade = $_POST['idade'];
        $email = $_POST['email'];
        $status = 0;
        $sql = "INSERT INTO cadastros (nome, idade, email, status) VALUES('$nome', '$idade', '$email', '$status')";

        if($conn -> query($sql) == TRUE) {
            echo "Cadastro realizado com sucesso";
        } else {
            echo "Cadastro não feito". $conn -> error;
        }
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulário</title>
</head>
<body>
    <h1>Formulário de Cadastro (POST)</h1>
    <form method="post">
        <label for="nome">Nome</label>
        <input type="text" id="nome" name="nome"  required>
        <br>
        <br>
        <label for="idade">Idade</label>
        <input type="number" id="idade" name="idade" required>
        <br>
        <br>
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>
        <br>
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>

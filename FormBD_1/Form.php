<?php 
if($_SERVER['REQUEST_METHOD'] == "POST"){

    include 'conexao.php';

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];
    $status = 0;

    $sql = "INSERT INTO contatos(nome, email, mensagem, status) VALUES('$nome', '$email', '$mensagem', '$status')";
    if ($conn->query($sql) === TRUE) {
        echo"Cadastro realizado com sucesso!";
    } else {    
        echo"Erro ao inserir no registro".$conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
</head>
<body>
    <h1>Formulário de Contato (POST)</h1>
    <form method="post">
        <label for="name">Nome</label>
        <input type="text" id="nome" name="nome" required>

        <br>
        <br>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>

        <br>
        <br>

        <textarea name="mensagem" id="mensagem" name="mensagem"></textarea>
        
        <br>
        <br>

        <input type="submit" value="Enviar">
    </form>
    <a href="contato.php">Voltar para a Lista</a> <!--Link para retorna à página de exebição-->

</body>
</html>
<?php 

    include 'conexao.php';

    $id = $_GET['id'];
    if(!isset($_GET['id'])){
        echo'Usuario não informado';
    }

    if($_SERVER['REQUEST_METHOD'] == "POST"){

        include 'conexao.php';
    
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $mensagem = $_POST['mensagem'];
        $status = 0;

        $q = "UPDATE contatos SET nome='$nome', email='$email', mensagem='$mensagem' WHERE id='$id'";

        if($conn->query($q) == TRUE){
            echo"Cadastro atualizado com sucesso";
        } else {
            echo "Erro ao editar";
        }
    }

    $q = "SELECT * FROM contatos WHERE id='$id'";
    $resultado = $conn->query($q);  

    if($resultado->num_rows <= 0){
        echo "Usuário não encontrado";
        exit(); 
    }

    $linha = $resultado->fetch_assoc()
    
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
        <input type="text" id="nome" name="nome" value="<?php echo $linha['nome']?>" required>

        <br>
        <br>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" value="<?php echo $linha['email']?>" required>

        <br>
        <br>

        <textarea name="mensagem" id="mensagem" name="mensagem" value="<?php echo $linha['mensagem']?>"></textarea>
        
        <br>
        <br>

        <input type="submit" value="Enviar">
    </form>
    <a href="contato.php">Voltar para a Lista</a> <!--Link para retorna à página de exebição-->

</body>
</html>
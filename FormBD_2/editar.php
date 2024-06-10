<?php 

    include 'conexao.php';

    $id = $_GET['id'];
    if (!isset($_GET['id'])) {
        echo'Usuário não informado';
    }

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        
        include 'conexao.php';

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $idade = $_POST['idade'];
        $staus = 0;

        $q = "UPDATE cadastros SET nome='$nome', email='$email', idade='$idade' WHERE id='$id'";

        if($conn -> query($q) == TRUE){
            echo"Atualizado com sucesso!!";
        } else {    
            echo "Erro ao editar";
        }
    }

    $q = "SELECT * FROM cadastros WHERE id='$id'";
    $resultado = $conn -> query($q);

    if($resultado -> num_rows <= 0) {
        echo"resultado não encontrado";
        exit();
    } else {
        $linha = $resultado -> fetch_assoc();
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
        <input type="text" id="nome" name="nome" value="<?php echo $linha['nome']?>">
        <br>
        <br>
        <label for="idade">Idade</label>
        <input type="number" id="idade" name="idade" value="<?php echo $linha['idade']?>">
        <br>
        <br>
        <label for="email">Email</label>
        <input type="email" id="email" name="email" value="<?php echo $linha['email']?>">
        <br>
        <br>
        <input type="submit" value="Enviar">
    </form>

    <a href="cadastro.php">voltar para a lista</a>
</body>
</html>

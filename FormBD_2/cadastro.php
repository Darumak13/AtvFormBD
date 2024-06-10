<?php 

    include 'conexao.php';

    $sql = "SELECT * FROM cadastros";
    $resultado = $conn ->query($sql);

?>

<table border="1" width="50%">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Idade</th>
    </tr>
<?php 
while ($linha = $resultado -> fetch_assoc()) {


?>

    <tr>
        <td><?php echo $linha['id'];?></td>
        <td><?php echo $linha['nome'];?></td>
        <td><?php echo $linha['email'];?></td>
        <td><?php echo $linha['idade'];?></td>
        <td><a href='editar.php?id=<?php echo $linha['id']; ?>'>Editar</a></td>
        <td><a href='remover.php?id=<?php echo $linha['id']; ?>'>Remover</a></td>
    </tr>

<?php 
}
?>
</table>




<?php

include 'conexao.php';

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Retorno</title>
</head>
<body>
    <table border ="1">
        <tr>
            <td>nome</td>
            <td>Sobrenome</td>
            <td>Email</td>
            <td>data de nascimento</td>
            <td>cpf</td>
            <td>rg</td>
            <td>estado Civil</td>
            <td>Tipo sanguineo</td>
        </tr>
    <?php 
    if($_POST['profissao'] = 'Médico'){
        $conexao = $conn->query ("SELECT nome,sobrenome,email,idade,cpf,rg,estadocivil,sangue FROM cadastro "); 
        while($dados = $conexao->fetch_array()) { ?>
            <tr>
            <td><?php echo $dados["nome"];?></td>
            <td><?php echo $dados["sobrenome"];?></td>
            <td><?php echo $dados["email"];?></td>
            <td><?php echo date("d/m/y", strtotime($dados["idade"]));?></td>
            <td><?php echo $dados["cpf"];?></td>
            <td><?php echo $dados["rg"];?></td>
            <td><?php echo $dados["estadocivil"];?></td>
            <td><?php echo $dados["sangue"];?></td>
            </tr>
            
        <?php } } ?>

        </table>
    
</body>
</html>

<?php

include 'conexao.php';

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Retorno</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
    <table class="table table-dark table-striped">
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

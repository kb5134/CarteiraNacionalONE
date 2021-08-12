<<?php 
include 'conexao.php';

    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $idade = $_POST['idade'];
    $cpf = $_POST['cpf'];
    $rg = $_POST['rg'];
    $estadocivil = $_POST['estadocivil'];
    $localizacao = $_POST['localizacao'];
    $profissao = $_POST['profissao'];
    $sangue = $_POST['sangue'];
    $pontos = $_POST['pontos'];
  
    // SQL
      $conexao = $conn;
      $conexao->query("INSERT INTO cadastro (nome, sobrenome, email, idade, cpf, rg, estadocivil, localizacao, profissao, sangue, pontos ) 
                      values('$nome', '$sobrenome', '$email', '$idade', '$cpf', '$rg', '$estadocivil', '$localizacao', '$profissao', '$sangue', '$pontos')" );
      $conexao -> autocommit(FALSE);
      $conexao->commit();


      if($_POST['profissao'] == 'Médico'){
          header("location: retorna_formulario.php");
      }
      if($_POST['profissao'] == 'ADM'){
          header("location: retorna_formulario_ADM.php");
      }
      if($_POST['profissao'] == 'Policial'){
          header("location: retorna_formulario_policial.php");
      }
?>

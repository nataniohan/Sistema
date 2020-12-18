<?php 
    include 'conexao.php';

    $nomeCompleto = $_GET["nome"];
    $email = $_GET["email"];
    $senha = $_GET["senha"];
    $cpf = $_GET["cpfCadastro"];
    $numeroDeTelefone = $_GET["numeroDeTelefone"];

    mysqli_query($conexao,"insert into usuario (nome, email, senha, cpf, numeroTelefone) values ('$nomeCompleto', '$email', '$senha', '$cpfCadastro','$numeroDeTelefone')");

    header('location:cadastroUsuario.php');
?>
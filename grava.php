<?php
    include('conexao.php');


    $cep = $_GET['cep'];
    $rua = $_GET['rua'];
    $numero = $_GET['numero'];
    $complemento = $_GET['complemento'];
    $bairro = $_GET['bairro'];
    $cidade = $_GET['cidade'];
    $numeroDoCartao = $_GET['numeroDoCartao'];
    $cvv = $_GET['CVV'];
    $dataNascimento = $_GET['dataVencimento'];
    $cpf = $_GET['cpf'];

    mysqli_query($conexao, "insert into dados (cep, rua, numero, complemento, bairro, cidade, numeroCartao, cvv, cpf, data_de_nascimento) values ('$cep','$rua','$numero','$complemento','$bairro','$cidade','$numeroDoCartao','$cvv','$cpf','$dataNascimento')");

    header('location:index.php');
?>
<?php

include 'conexao.php';
session_start();

if(empty($_POST['email']) || empty($_POST['senha'])) {
	header('Location:index.php');
	exit();
}

$email = $_POST['email'];
$senha = $_POST['senha'];

$resultado = mysqli_query($conexao, "select email, senha from usuario where email = '$email' and  senha = '$senha'");

if(mysqli_num_rows ($resultado)>0){
    header('Location:index.php');
    $_SESSION['autenticado'] = 'SIM';
	exit();
}else{
    header('location:naoCadastrado.php');
};
?>

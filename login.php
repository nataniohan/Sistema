<?php
    include('cabecalho.php');
?>
<div class='container col cor borda centro'>
    <form method='POST' action="verificaLogin.php">
        <p>E-mail</p>
        <input type="text" name='email'>
        <p>Usuario</p>
        <input type="password" name='senha'></br></br>
        <button type="submit" class="botao botao1">Efetuar Login</button>
        <p>nao é cadastrado ? <a href="http://localhost/Projeto/cadastroUsuario.php">clique aqui</a>.</p>
    </form>
</div>
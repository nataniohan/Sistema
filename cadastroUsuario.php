<?php 
    include 'cabecalho.php';
?>
<script type="text/javascript" src="javaScript/mascara.js"></script>
<form method="GET" action="gravaUsuario.php">
    <div class='container col cor borda centro'>
        <p>Nome Completo</p>
        <input type="text" name="nome" id="nome">
        <p>E-mail</p>
        <input type="text" name="email" id="email">
        <p>Senha</p>
        <input type="password" name="senha">
        <p>CPF</p>
        <input type="text" name="cpfCadastro" id="cpfCadastro">
        <p>Numero de telefone</p>
        <input type="text" name="numeroDeTelefone" id="numeroDeTelefone"><br><br>
        <button type="submit" class="botao botao1">Efetuar Cadastro</button>
    </div>
    
</form>
<?php 
    include 'rodape.php';
?>
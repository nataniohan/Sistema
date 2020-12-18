<?php
    
    include 'cabecalho.php';
    include 'validador.php';
?>

<body>
<script type="text/javascript" src="javaScript/mascara.js"></script>
        <form method="GET" action="grava.php" name="formulario">
            <div class="container">
                <div class="row"><!--PRIMEIRA TABELA-->
                    <div class="col">
                        <div class="cor borda centro">
                            <p class="titulo">Dados de endereço de sua cidade</p>
                            <p>CEP</p>     
                            <input type="text" name="cep" id="cep">
                            <p>Rua</p>
                            <input type="text" name="rua" id="rua">
                            <p>Número</p>
                            <input type="text" name="numero" id="numero">
                            <p>Complemento (opcional)</p>
                            <input type="text" name="complemento" id="complemento">
                            <p>Bairro</p>
                            <input type="text" name="bairro" id="bairro">
                            <p>Cidade</p>
                            <input type="text" name="cidade" id="cidade">
                            <p>Estado</p>
                            <select>
                                <option>SP</option>
                                <option>AC</option>
                                <option>AL</option>
                                <option>AP</option>
                                <option>AM</option>
                                <option>BA</option>
                                <option>CE</option>
                                <option>ES</option>
                                <option>GO</option>
                                <option>MA</option>
                                <option>MT</option>
                                <option>MS</option>
                                <option>MG</option>
                                <option>PA</option>
                                <option>PB</option>
                                <option>PR</option>
                                <option>PE</option>
                                <option>PI</option>
                                <option>RJ</option>
                                <option>RN</option>
                                <option>RS</option>
                                <option>RO</option>
                                <option>RR</option>
                                <option>SC</option>
                                <option>SE</option>
                                <option>TO</option>
                                <option>DF</option>
                            </select>
                        </div>
                    </div>
                    <div class="col"><!--SEGUNDA TABELA-->
                        <div class="cor">
                            <div class="borda2">
                                <div class="centro">
                                    <p class="titulo">Dados do cartão</p>
                                    <p>Número do cartão</p>
                                    <input type="text" name="numeroDoCartao" id="numeroDoCartao">
                                    <p>CVV</p>
                                    <input type="text" name="CVV" id="CVV">
                                    <p>Data de vencimento</p>
                                    <input type="text" name="dataVencimento" id="dataVencimento">
                                    <p>CPF</p>
                                    <input type="text" name="cpf" id="cpf"><br>
                                    <form>
                                        <input type="radio" id="male" value="male">
                                        <label for="male">Crédito</label>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                        <div class="col"><!--informativo do produto ainda fazer-->
                        <table id="customizado">
                                <tr>
                                    <th class="titulo">Detalhes do produto</th>
                                </tr>
                                <tr>
                                    <td>Pedido (1x Jogo de cama do Batman R$39,90)</td>
                                </tr>
                                <tr>
                                    <td>Frete (12 dias úteis – R$ 15,00)</td>
                                </tr> 
                                <tr>
                                    <td><strong>Total (R$54,90)</strong></td>
                                </tr> 
                        </table> 
                        <button class="botao botao1">Finalizar Compra</button>
                        </div>
                    
                </div>
                <button class="botao botao1" type='submit'>Finish</button>
            </div>
        </form>
        <div class="rodape">
        </div>
</body>
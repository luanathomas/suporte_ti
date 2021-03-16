<?php

include_once getcwd()."\src\Caso.php";
include_once getcwd()."\src\Equipamento.php";
include_once getcwd()."\src\Problema_Primario.php";
include_once getcwd()."\src\Problema_Secundario.php";
include_once getcwd()."\src\Solucao.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Central de Ajuda</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="estilo.css" rel="stylesheet">
    <script src="main.js"></script>
</head>

<body>
<script src="main.js"></script>
    <div id="container">
        <form class="form" method="post" action='processa.php'>
        
        <div class="titulo">
                <h1> Olá! Seja bem vindo a nossa Central de Ajuda.  </h1>
            </div>

            <div class="descricao">
                <h3> Administrador, cadastre um novo problema!</h3>
            </div>

            <div class="label1">
            <label for="input_problema_primario">Qual é o problema? </label>
            </div>

            <div class="input_problema_primario">
                <input type="text" name="input_problema_primario" required>
            </div>

            

            <br>   

            <div class="botao">
                <button name="botao" value="cadastrar" class="cadastrar"> Cadastrar </button>
            </div>

            <div class="resultado"></div>

            <div class="rodape">
                <h3>Desenvolvido por Andressa Farkas, Luana Thomas e Soraia Spohr</h3>
            </div>

        </form>
    </div>

    <script src="main.js"></script>
</body>

</html>


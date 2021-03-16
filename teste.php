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


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>




<body>
<script src="main.js"></script>
    <div id="container">
        <form class="form" method="post" action='processa.php'>
        
        <div class="titulo">
                <h1> Olá! Seja bem vindo a nossa Central de Ajuda.  </h1>
            </div>

            <div class="descricao">
                <h3> Administrador, cadastre uma nova solução!</h3>
            </div>

            <div class="label1">
            <label for="input_equipamento">Qual o equipamento defeituoso? </label>
            </div>

            
            <div class="equipamento">
                <div class="input_equipamento">
                   <select name="select_equipamento" id="select" required>
                        <option value="" disabled selected>Selecione</option>
                        <?php
                        $equipamentos = Equipamento::listar();
                        for ($i=0; $i < count($equipamentos) ; $i++) { 
                            echo '<option value='.$equipamentos[$i]->ID_equipamento.'>'.$equipamentos[$i]->nome.'</option>';
                        }
                        ?>
                        <option value="outro">outro</option>
                    </select>   
                </div>
                
                <div id="meuDiv">
                    <input type="text"/>
                    <button type="button" id="cancel">Cancelar</button>
                 </div>
                
            </div>





            <!-- <div class="label2">
            <label for="input_problema_primario">Qual é o problema? </label>
            </div>
            <div class="input_problema_primario" >
                <input type="text" name="input_problema_primario" required>
            </div>
            
            <div class="label3">
            <label for="input_problema_secundario">Descreva o problema detalhadamente</label>
            </div>
            <div class="input_problema_secundario">
                <input type="text" name="input_problema_secundario" required>
            </div>

            <div class="label4">
            <label for="input_solucao">Descreva a solução para o problema</label>
            </div>
            <div class="input_solucao">
                <input type="text" name="input_solucao" required>
            </div>

            <br>    -->

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



<script>
$(function() {
    $('#meuDiv').hide();

    $('#select').change(function() {
        if ($(this).val() === 'outro') {
            $('#meuDiv').show();
            $('#select').hide();
        }
    });

    $('#cancel').click(function () {
        $('#select').show();
        $('#select').val('');
        $('#meuDiv').hide();
    });
});
</script>
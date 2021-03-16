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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
$(function() {
    $('#input_equipamento').hide();

    $('#select_equipamento').change(function() {
        if ($("#select_equipamento").value() == 'outro') {
            $('#input_equipamento').show();
            $('#select_equipamento').hide();
        }
    });

    $('#cancel').click(function() {
        $('#select_equipamento').show();
        $('#select_equipamento').value('');
        $('#input_equipamento').hide();
    });
});
</script>

    <div id="container">
        <form class="form" method="post" action='processa.php'>
        
        <div class="titulo">
                <h1> Olá! Seja bem vindo a nossa Central de Ajuda.  </h1>
            </div>

            <div class="descricao">
                <h3> Administrador, cadastre um novo equipamento!</h3>
            </div>

            <div class="label1">
            <label for="input_equipamento">Qual o equipamento defeituoso? </label>
            </div>

            
            <!-- <select name="opcoes" id="select">
                <option value=""></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="outro">outro</option>
            </select>

	        <div id="meuDiv">
	            <input type="text"/>
	            <button type="button" id="cancel">Cancelar</button>
	        </div>

</div>
            
             -->
            
            
            
            
            
            
            <div class="input_equipamento" id="input_equipamento">
                <input type="text" name="input_equipamento" required>
                <button type="button" id="cancel">Cancelar</button> 
            </div>

            <?php
            echo '<div class="select_equipamento id="select_equipamento">'; 
                $equipamentos = Equipamento::listar();
                
                echo '<select name="input_equipamento" required>';
                        echo '<option value="" disabled selected>Selecione</option>';
                        for ($i=0; $i < count($equipamentos) ; $i++) { 
                            echo '<option value='.$equipamentos[$i]->ID_equipamento.'>'.$equipamentos[$i]->nome.'</option>';
                        }
                        echo '<option value="outro">Cadastrar outro</option>';
                echo '</select>';   
            echo '</div>';
            ?>

            <br>   

            <div class="botao">
                <button name="botao" value="cEquipamento" class="cEquipamento"> Cadastrar </button>
            </div>

            <div class="resultado"></div>

            <div class="rodape">
                <h3>Desenvolvido por Andressa Farkas, Luana Thomas e Soraia Spohr</h3>
            </div>

        </form>
    </div>

    <script src="main.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script>
$(function() {
    $('#input_equipamento').hide();

    $('#select_equipamento').change(function() {
        if ($(this).val() === 'outro') {
            $('#input_equipamento').show();
            $('#select_equipamento').hide();
        }
    });

    $('#cancel').click(function() {
        $('#select_equipamento').show();
        $('#select_equipamento').val('');
        $('#input_equipamento').hide();
    });
});
</script>
</body>

</html>


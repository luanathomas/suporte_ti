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
                <h3> Administrador, cadastre um novo caso!</h3>
            </div>

            <!-- Equipamento -->

            <div class="label1">
            <label >Qual o equipamento defeituoso? </label>
            </div>

            <div class="select_equipamento">
                <select name="select_equipamento" id="select_equipamento">
                    <option value="" disabled selected>Selecione</option>
                    <?php
                    $equipamentos = Equipamento::listar();
                    for ($i=0; $i < count($equipamentos) ; $i++) { 
                        echo '<option value='.$equipamentos[$i]->ID_equipamento.'>'.$equipamentos[$i]->nome.'</option>';
                    }
                    ?>
                    <option value="outro1">Cadastrar novo equipamento...</option>
                </select>   
            </div>
                
            <div class="input_equipamento" id="input_equipamento">
                <input name="input_equipamento" type="text"/>
                <button type="button" class="button" id="cancel1">Cancelar</button>
            </div>
                
            <!-- Problema Primário -->
        
            <div class="label2">
            <label>Qual é o problema? </label>
            </div>

            <div class="select_problema_primario">
                <select name="select_problema_primario" id="select_problema_primario">
                    <option value="" disabled selected>Selecione</option>
                    <?php
                    $problemas_primarios = Problema_Primario::listar();
                    for ($i=0; $i < count($problemas_primarios) ; $i++) { 
                        echo '<option value='.$problemas_primarios[$i]->ID_problema_primario.'>'.$problemas_primarios[$i]->nome.'</option>';
                    }
                    ?>
                    <option value="outro2">Cadastrar novo problema...</option>
                </select>   
            </div>
                
            <div class="input_problema_primario" id="input_problema_primario">
                <input name="input_problema_primario" type="text"/>
                <button type="button" class="button" id="cancel2">Cancelar</button>
            </div>

            <!-- Problema Secundário -->

            <div class="label3">
            <label>Descreva o problema detalhadamente</label>
            </div>

            <div class="select_problema_secundario">
                <select name="select_problema_secundario" id="select_problema_secundario">
                    <option value="" disabled selected>Selecione</option>
                    <?php
                    $problemas_secundarios = Problema_Secundario::listar();
                    for ($i=0; $i < count($problemas_secundarios) ; $i++) { 
                        echo '<option value='.$problemas_secundarios[$i]->ID_problema_secundario.'>'.$problemas_secundarios[$i]->nome.'</option>';
                    }
                    ?>
                    <option value="outro3">Cadastrar novo problema...</option>
                </select>   
            </div>
                
            <div class="input_problema_secundario" id="input_problema_secundario">
                <input name="input_problema_secundario" type="text"/>
                <button type="button" class="button" id="cancel3">Cancelar</button>
            </div>

            <!-- Solução -->

            <div class="label4">
            <label for="input_solucao">Descreva a solução para o problema</label>
            </div>
            
            <div class="select_solucao">
                <select name="select_solucao" id="select_solucao">
                    <option value="" disabled selected>Selecione</option>
                    <?php
                    $solucoes = Solucao::listar();
                    for ($i=0; $i < count($solucoes) ; $i++) { 
                        echo '<option value='.$solucoes[$i]->ID_solucao.'>'.$solucoes[$i]->nome.'</option>';
                    }
                    ?>
                    <option value="outro4">Cadastrar nova solucao...</option>
                </select>   
            </div>
                
                

            <div class="input_solucao" id="input_solucao">
                <input name="input_solucao" type="text"/>
                <button type="button" class="button" id="cancel4">Cancelar</button>
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
    <script>
$(function() {
    $('#input_equipamento').hide();

    $('#select_equipamento').change(function() {
        if ($(this).val() === 'outro1') {
            $('#input_equipamento').show();
            $('#select_equipamento').hide();
        }
    });

    $('#cancel1').click(function () {
        $('#select_equipamento').show();
        $('#select_equipamento').val('');
        $('#input_equipamento').hide();
    });
});

$(function() {
    $('#input_problema_primario').hide();

    $('#select_problema_primario').change(function() {
        if ($(this).val() === 'outro2') {
            $('#input_problema_primario').show();
            $('#select_problema_primario').hide();
        }
    });

    $('#cancel2').click(function () {
        $('#select_problema_primario').show();
        $('#select_problema_primario').val('');
        $('#input_problema_primario').hide();
    });
});

$(function() {
    $('#input_problema_secundario').hide();

    $('#select_problema_secundario').change(function() {
        if ($(this).val() === 'outro3') {
            $('#input_problema_secundario').show();
            $('#select_problema_secundario').hide();
        }
    });

    $('#cancel3').click(function () {
        $('#select_problema_secundario').show();
        $('#select_problema_secundario').val('');
        $('#input_problema_secundario').hide();
    });
});

$(function() {
    $('#input_solucao').hide();

    $('#select_solucao').change(function() {
        if ($(this).val() === 'outro4') {
            $('#input_solucao').show();
            $('#select_solucao').hide();
        }
    });

    $('#cancel4').click(function () {
        $('#select_solucao').show();
        $('#select_solucao').val('');
        $('#input_solucao').hide();
    });
});

</script>
    <script src="main.js"></script>
</body>



</html>


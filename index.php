<?php

include_once getcwd() . "\src\Caso.php";
include_once getcwd() . "\src\Equipamento.php";
include_once getcwd() . "\src\Problema_Primario.php";
include_once getcwd() . "\src\Problema_Secundario.php";
include_once getcwd() . "\src\Solucao.php";

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
        <form class="form" method="post" action='solucao.php'>

            <div class="titulo">
                <h1> Olá! Seja bem vindo a nossa Central de Ajuda. </h1>
            </div>

            <div class="descricao" >
                <h3> Como podemos ajudar? </h3>
            </div>

            <div class="label1">
                <label for="select1">Selecione o equipamento: </label>
            </div>
            <?php
            echo '<div class="select1">';
            $equipamentos = Equipamento::listar();
            echo '<select name="select1" id="select1" aria-placeholder="selecione">';
            echo '<option value="" disabled selected>Selecione</option>';
            for ($i = 0; $i < count($equipamentos); $i++) {
                echo '<option value=' . $equipamentos[$i]->ID_equipamento . '>' . $equipamentos[$i]->nome . '</option>';
            }
            echo '</select>';
            echo '</div>';
            ?>

            <div class="label2">
                <label for="select2">Qual é o problema? </label>
            </div>
            <?php
            echo '<div class="select2">';
            $problemas_primarios = Problema_Primario::listar();
            echo '<select name="select2" id="select2" aria-placeholder="selecione">';
            echo '<option value="" disabled selected>Selecione</option>';
            for ($i = 0; $i < count($problemas_primarios); $i++) {
                echo '<option value=' . $problemas_primarios[$i]->ID_problema_primario . '>' . $problemas_primarios[$i]->nome . '</option>';
            }
            echo '</select>';
            echo '</div>';
            ?>

            <div class="label3">
                <label for="select3">Pode nos explicar melhor? </label>
            </div>
            <?php
            echo '<div class="select3">';
            $problemas_secundarios = Problema_Secundario::listar();
            echo '<select name="select3" id="select3" aria-placeholder="selecione">';
            echo '<option value="" disabled selected>Selecione</option>';
            for ($i = 0; $i < count($problemas_secundarios); $i++) {
                echo '<option value=' . $problemas_secundarios[$i]->ID_problema_secundario . '>' . $problemas_secundarios[$i]->nome . '</option>';
            }
            echo '</select>';
            echo '</div>';
            ?>


            <div class="label4">
                <a href="ajuda.php">Como utlizar a Central de Ajuda?</a>
            </div>
            <div class="vazio">
                <a href="admin.php">Sou administrador</a>
            </div>

            <div class="botao">
                <button name="botao" id="solucao" value="solucao" class="solucao"> Me mostre uma solução! </button>
            </div>

            
            <div class="rodape">
                <h3>Desenvolvido por Andressa Farkas, Luana Thomas e Soraia Spohr</h3>
            </div>



        </form>
    </div>

    <script src="main.js"></script>
</body>

</html>
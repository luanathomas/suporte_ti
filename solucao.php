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
        <form class="form" method="post" action='processa.php'>

            <div class="titulo">
                <h1> Olá! Seja bem vindo a nossa Central de Ajuda. </h1>
            </div>

            <div class="descricao">
                <h3> Qual destas soluções te ajudou? </h3>
            </div>

            
            

            <?php



            if (isset($_POST['botao']) && $_POST['botao'] == "solucao") {
                $id_equipamento = $_POST['select1'];
                $id_problema_primario = $_POST['select2'];
                $id_problema_secundario = $_POST['select3'];

                

                $casos3 = Caso::listar3($id_equipamento, $id_problema_primario, $id_problema_secundario);
                if (empty($casos3)) {
                    $casos2 = Caso::listar2($id_equipamento, $id_problema_primario);
                    if (empty($casos2)) {
                        $casos1 = Caso::listar1($id_equipamento);
                        if (empty($casos1)) {
                            echo '<center><h4>Desculpe, mas não encontramos nenhuma solução para o seu problema! <br><br> Contate o administrador.</h4></center>';
                            echo '<div>';
                            echo '<br>';
                            echo '<center><button name="botao" id="voltar" value="voltar" class="voltar"> Voltar! </button></center>';
                            echo '</div>';
                        } else {
                            echo '<br>';
                            echo '<h3> Qual destas soluções te ajudou? </h3>';
                            for ($i = 0; $i < count($casos1); $i++) {
                                $lista_solucao = Solucao::buscarID($casos1[$i]->ID_solucao);
                                echo '<div class="item">';
                                echo '<input type="radio" id="' . $casos1[$i]->ID_solucao . '" name="solucao_escolhida" value="' . $casos1[$i]->ID_solucao . '">';
                                echo '<label for="' . $casos1[$i]->ID_solucao . '">' . $lista_solucao . '</label><br>';
                                echo '<br>';
                                echo '</div>';
                            }
                            echo '<div class="item">';
                            echo '<input type="radio" id="nenhum" name="solucao_escolhida" value="0">';
                            echo '<label for="nenhum">Nenhuma solução me ajudou! :( </label><br>';
                            echo '<br>';
                            echo '</div>';

                            echo '<div>';
                            echo '<center><button name="botao" id="enviar" value="enviar" class="enviar"> Enviar! </button></center>';
                            echo '</div>';
                        }
                    } else {
                        echo '<br>';
                        echo '<h3> Qual destas soluções te ajudou? </h3>';
                        for ($i = 0; $i < count($casos2); $i++) {
                            $lista_solucao = Solucao::buscarID($casos2[$i]->ID_solucao);
                            echo '<div class="item">';
                            echo '<input type="radio" id="' . $casos2[$i]->ID_solucao . '" name="solucao_escolhida" value="' . $casos2[$i]->ID_solucao . '">';
                            echo '<label for="' . $casos2[$i]->ID_solucao . '">' . $lista_solucao . '</label><br>';
                            echo '<br>';
                            echo '</div>';
                        }
                        echo '<div class="item">';
                        echo '<input type="radio" id="nenhum" name="solucao_escolhida" value="0">';
                        echo '<label for="nenhum">Nenhuma solução me ajudou! :( </label><br>';
                        echo '<br>';
                        echo '</div>';

                        echo '<div>';
                        echo '<center><button name="botao" id="enviar" value="enviar" class="enviar"> Enviar! </button></center>';
                        echo '</div>';
                    }
                } else {
                    $solucao = $casos3[0]->ID_solucao;
                    $lista_solucao = Solucao::buscarID($solucao);
                    echo '<br>';

                    echo '<div class="item">';
                    echo '<input type="radio" id="' . $solucao . '" name="solucao_escolhida" value="' . $solucao . '">';
                    echo '<label for="' . $solucao . '">' . $lista_solucao . '</label><br>';
                    echo '<br>';
                    echo '</div>';

                    echo '<div class="item">';
                    echo '<input type="radio" id="nenhum" name="solucao_escolhida" value="0">';
                    echo '<label for="nenhum">Nenhuma solução me ajudou! :( </label><br>';
                    echo '<br>';
                    echo '</div>';


                    echo '<div>';
                    echo '<center><button name="botao" id="enviar" value="enviar" class="enviar"> Enviar! </button></center>';
                    echo '</div>';

                }
            }

            echo '<input type="text" name="id_equipamento" id="id_equipamento" class="id_equipamento" hidden value="'.$id_equipamento.'">'; 
            echo '<input type="text" name="id_problema_primario" id="id_problema_primario" class="id_problema_primario" hidden value="'.$id_problema_primario.'">';
            echo '<input type="text" name="id_problema_secundario" id="id_problema_secundario" class="id_problema_secundario" hidden value="'.$id_problema_secundario.'">';   

            ?>






            <div class="rodape">
                <h3>Desenvolvido por Andressa Farkas, Luana Thomas e Soraia Spohr</h3>
            </div>



        </form>
    </div>

    <script src="main.js"></script>
</body>

</html>
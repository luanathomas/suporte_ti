<?php

include_once getcwd()."\src\Caso.php";
include_once getcwd()."\src\Equipamento.php";
include_once getcwd()."\src\Problema_Primario.php";
include_once getcwd()."\src\Problema_Secundario.php";
include_once getcwd()."\src\Solucao.php";


if (isset($_POST['botao']) && $_POST['botao'] == "cadastrar") {
    $input_equipamento = $_POST['input_equipamento'];
    $input_problema_primario = $_POST['input_problema_primario'];
    $input_problema_secundario = $_POST['input_problema_secundario'];
    $input_solucao = $_POST['input_solucao'];

    
    
    



	header("location: admin.php");
} 


?>
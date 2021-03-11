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
    
    $equipamento = new Equipamento(null, $input_equipamento);
    $problema_primario = new Problema_Primario(null, $input_problema_primario);



	header("location: admin.php");
} 


?>
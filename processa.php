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

    $ID_equipamento = $_POST['select_equipamento'];
    $ID_problema_primario = $_POST['select_problema_primario'];
    $ID_problema_secundario = $_POST['select_problema_secundario'];
    $ID_solucao = $_POST['select_solucao'];

 
    if ($ID_equipamento == "outro1") {
        $equipamento = new Equipamento(null, $input_equipamento);
        $equipamento->inserir();
        $ID_equipamento = Equipamento::buscar($input_equipamento);
    }

    if ($ID_problema_primario == "outro2") {
        $problema_primario = new Problema_Primario(null, $input_problema_primario);
        $problema_primario->inserir();
        $ID_problema_primario = Problema_Primario::buscar($input_problema_primario);
    }

    if ($ID_problema_secundario == "outro3") {
        $problema_secundario = new Problema_Secundario(null, $input_problema_secundario);
        $problema_secundario->inserir();
        $ID_problema_secundario = Problema_Secundario::buscar($input_problema_secundario);
    }

    if ($ID_solucao == "outro4") {
        $solucao = new Solucao(null, $input_solucao);
        $solucao->inserir();
        $ID_solucao = Solucao::buscar($input_solucao);
    }
       
    
    $caso = new Caso(null, $ID_equipamento, $ID_problema_primario, $ID_problema_secundario, $ID_solucao);
    $caso->inserir();

    echo "<script>alert('Solução cadastrada com sucesso!');";
	echo "javascript:window.location='index.php';</script>";

} 
?>
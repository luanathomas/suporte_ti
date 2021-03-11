<?php

include_once getcwd()."\src\Caso.php";
include_once getcwd()."\src\Equipamento.php";
include_once getcwd()."\src\Problema_Primario.php";
include_once getcwd()."\src\Problema_Secundario.php";
include_once getcwd()."\src\Solucao.php";


if (isset($_POST['botao']) && $_POST['botao'] == "cadastrar") {
    $id_equipamento = $_POST['input_equipamento'];
    $input_problema_primario = $_POST['input_problema_primario'];
    $input_problema_secundario = $_POST['input_problema_secundario'];
    $input_solucao = $_POST['input_solucao'];

    $problema_primario = new Problema_Primario(null, $input_problema_primario);
    $problema_primario->inserir();
    $problema_secundario = new Problema_Secundario(null, $input_problema_secundario);
    $problema_secundario->inserir();
    $solucao = new Solucao(null, $input_solucao);
    $solucao->inserir();

    $id_problema_primario = Problema_Primario::buscar($input_problema_primario);
    $id_problema_secundario = Problema_Secundario::buscar($input_problema_secundario);
    $id_solucao = Solucao::buscar($input_solucao);

    $caso = new Caso(null, $id_equipamento, $id_problema_primario, $id_problema_secundario, $id_solucao);
    $caso->inserir();

    echo "<script>alert('Solução cadastrada com sucesso!');";
	echo "javascript:window.location='index.php';</script>";
    
    

} 


?>
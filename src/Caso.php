<?php
include_once getcwd()."\db\MySQL.class.php";

class Caso{

    public $ID_caso;
    public $ID_equipamento;
    public $ID_problema_primario;
    public $ID_problema_secundario;
    public $ID_solucao;

    
    public function __construct($ID_caso, $ID_equipamento, $ID_problema_primario, $ID_problema_secundario, $ID_solucao){
        $this->ID_caso = $ID_caso;
        $this->ID_equipamento = $ID_equipamento;
        $this->ID_problema_primario = $ID_problema_primario;
        $this->ID_problema_secundario = $ID_problema_secundario;
        $this->ID_solucao = $ID_solucao;
    }

    public function inserir(){
        $conexao = new MySQL();
        $sql = "INSERT INTO caso(ID_caso, ID_equipamento, ID_problema_primario, ID_problema_secundario, ID_Solucao) VALUES ('".$this->ID_caso."', '".$this->ID_equipamento."', '".$this->ID_problema_primario."', '".$this->ID_problema_secundario."', '".$this->ID_solucao."')";
        $conexao->executa($sql);
    }

    public static function listar(){
        $conexao = new MySQL();
        $sql = "SELECT ID_caso, ID_equipamento, ID_problema_primario, ID_problema_secundario, ID_solucao FROM caso";
		$resultados = $conexao->consulta($sql);
		if(!empty($resultados)){
            $casos = array();
            foreach($resultados as $resultado){
                $caso = new Caso($resultado['ID_caso'], $resultado['ID_equipamento'], $resultado['ID_problema_primario'], $resultado['ID_problema_secundario'], $resultado['ID_solucao']);
                $casos[] = $caso;
            }
            return $casos;
        }else{
            return false;
        }
    }

    public static function listar1($ID_equipamento){
        $conexao = new MySQL();
        $sql = "SELECT ID_caso, ID_equipamento, ID_problema_primario, ID_problema_secundario, ID_solucao FROM caso WHERE caso.ID_equipamento = '" .$ID_equipamento."'";
		$resultados = $conexao->consulta($sql);
		if(!empty($resultados)){
            $casos = array();
            foreach($resultados as $resultado){
                $caso = new Caso($resultado['ID_caso'], $resultado['ID_equipamento'], $resultado['ID_problema_primario'], $resultado['ID_problema_secundario'], $resultado['ID_solucao']);
                $casos[] = $caso;
            }
            return $casos;
        }else{
            return false;
        }
    }

    public static function listar2($ID_equipamento, $ID_problema_primario){
        $conexao = new MySQL();
        $sql = "SELECT ID_caso, ID_equipamento, ID_problema_primario, ID_problema_secundario, ID_solucao FROM caso WHERE caso.ID_equipamento = '" .$ID_equipamento."' AND caso.ID_problema_primario = '" .$ID_problema_primario."'";
		$resultados = $conexao->consulta($sql);
		if(!empty($resultados)){
            $casos = array();
            foreach($resultados as $resultado){
                $caso = new Caso($resultado['ID_caso'], $resultado['ID_equipamento'], $resultado['ID_problema_primario'], $resultado['ID_problema_secundario'], $resultado['ID_solucao']);
                $casos[] = $caso;
            }
            return $casos;
        }else{
            return false;
        }
    }

    public static function listar3($ID_equipamento, $ID_problema_primario, $ID_problema_secundario){
        $conexao = new MySQL();
        $sql = "SELECT ID_caso, ID_equipamento, ID_problema_primario, ID_problema_secundario, ID_solucao FROM caso WHERE caso.ID_equipamento = '" .$ID_equipamento."' AND caso.ID_problema_primario = '" .$ID_problema_primario."' AND caso.ID_problema_secundario = '" .$ID_problema_secundario."'";
		$resultados = $conexao->consulta($sql);
		if(!empty($resultados)){
            $casos = array();
            foreach($resultados as $resultado){
                $caso = new Caso($resultado['ID_caso'], $resultado['ID_equipamento'], $resultado['ID_problema_primario'], $resultado['ID_problema_secundario'], $resultado['ID_solucao']);
                $casos[] = $caso;
            }
            return $casos;
        }else{
            return false;
        }
    }

}
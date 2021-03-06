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

    public static function listarPeriodo($dInicio, $dFim){
        $conexao = new MySQL();
        $sql = "SELECT idAmostra, datas, hora, tAmbiente, tMassa, material, largura, comprimento, pBruto, pMassa FROM amostra_massa WHERE amostra_massa.datas between '".$dInicio."' AND '".$dFim."'";
		$resultados = $conexao->consulta($sql);
		if(!empty($resultados)){
            $amostras = array();
            foreach($resultados as $resultado){
                $amostra = new AmostraMassa($resultado['idAmostra'], $resultado['datas'], $resultado['hora'], $resultado['tAmbiente'], $resultado['tMassa'], $resultado['material'], $resultado['largura'], $resultado['comprimento'], $resultado['pBruto'], $resultado['pMassa']);
                $amostras[] = $amostra;
            }
            return $amostras;
        }else{
            return false;
        }
    }

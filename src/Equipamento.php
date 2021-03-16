<?php
include_once getcwd()."\db\MySQL.class.php";

class Equipamento{

    public $ID_equipamento;
    public $nome;
    
    public function __construct($ID_equipamento, $nome){
        $this->ID_equipamento = $ID_equipamento;
        $this->nome = $nome;
    }

    public function inserir(){
        $conexao = new MySQL();
        $sql = "INSERT INTO equipamento(ID_equipamento, nome) VALUES ('".$this->ID_equipamento."', '".$this->nome."')";
        $conexao->executa($sql);
    }

    public static function listar(){
        $conexao = new MySQL();
        $sql = "SELECT ID_equipamento, nome FROM equipamento";
		$resultados = $conexao->consulta($sql);
		if(!empty($resultados)){
            $equipamentos = array();
            foreach($resultados as $resultado){
                $equipamento = new Equipamento($resultado['ID_equipamento'], $resultado['nome']);
                $equipamentos[] = $equipamento;
            }
            return $equipamentos;
        }else{
            return false;
        }
    }

    public static function buscar($input){
        $conexao = new MySQL();
        $sql = "SELECT ID_equipamento, nome FROM equipamento WHERE equipamento.nome = '" .$input."'";
		$resultados = $conexao->consulta($sql);
		if(!empty($resultados)){
            $equipamentos = 0;
            foreach($resultados as $resultado){
                $equipamento = new Equipamento($resultado['ID_equipamento'], $resultado['nome']);
                $equipamentos = $equipamento->ID_equipamento;
            }
            return $equipamentos;
        }else{
            return false;
        }
    }

    
}
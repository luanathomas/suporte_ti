<?php
include_once getcwd()."\db\MySQL.class.php";

class Solucao{

    public $ID_solucao;
    public $nome;
    
    public function __construct($ID_solucao, $nome){
        $this->ID_solucao = $ID_solucao;
        $this->nome = $nome;
    }

    public function inserir(){
        $conexao = new MySQL();
        $sql = "INSERT INTO solucao(ID_solucao, nome) VALUES ('".$this->ID_solucao."', '".$this->nome."')";
        $conexao->executa($sql);
    }

    public static function listar(){
        $conexao = new MySQL();
        $sql = "SELECT ID_solucao, nome FROM equipamento";
		$resultados = $conexao->consulta($sql);
		if(!empty($resultados)){
            $solucoes = array();
            foreach($resultados as $resultado){
                $solucao = new Solucao($resultado['ID_solucao'], $resultado['nome']);
                $solucoes[] = $solucao;
            }
            return $solucoes;
        }else{
            return false;
        }
    }

    public static function buscar($input){
        $conexao = new MySQL();
        $sql = "SELECT ID_solucao, nome FROM solucao WHERE solucao.nome = '" .$input."'";
		$resultados = $conexao->consulta($sql);
		if(!empty($resultados)){
            $solucoes = 0;
            foreach($resultados as $resultado){
                $solucao = new Solucao($resultado['ID_solucao'], $resultado['nome']);
                $solucoes = $solucao->ID_solucao;
            }
            return $solucoes;
        }else{
            return false;
        }
    }

    public static function buscarID($input){
        $conexao = new MySQL();
        $sql = "SELECT ID_solucao, nome FROM solucao WHERE solucao.ID_solucao = '" .$input."'";
		$resultados = $conexao->consulta($sql);
		if(!empty($resultados)){
            $solucoes = 0;
            foreach($resultados as $resultado){
                $solucao = new Solucao($resultado['ID_solucao'], $resultado['nome']);
                $solucoes = $solucao->nome;
            }
            return $solucoes;
        }else{
            return false;
        }
    }
}
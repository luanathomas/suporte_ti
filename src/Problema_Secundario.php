<?php
include_once getcwd()."\db\MySQL.class.php";

class Problema_Secundario{

    public $ID_problema_secundario;
    public $nome;
    
    public function __construct($ID_problema_secundario, $nome){
        $this->ID_problema_secundario = $ID_problema_secundario;
        $this->nome = $nome;
    }

    public function inserir(){
        $conexao = new MySQL();
        $sql = "INSERT INTO problema_secundario(ID_problema_secundario, nome) VALUES ('".$this->ID_problema_secundario."', '".$this->nome."')";
        $conexao->executa($sql);
    }

    public static function listar(){
        $conexao = new MySQL();
        $sql = "SELECT ID_problema_secundario, nome FROM problema_secundario";
		$resultados = $conexao->consulta($sql);
		if(!empty($resultados)){
            $problemas_secundarios = array();
            foreach($resultados as $resultado){
                $problema_sencundario = new Problema_Secundario($resultado['ID_problema_secundario'], $resultado['nome']);
                $problemas_secundarios[] = $problema_sencundario;
            }
            return $problemas_secundarios;
        }else{
            return false;
        }
    }

    public static function buscar($input){
        $conexao = new MySQL();
        $sql = "SELECT ID_problema_secundario, nome FROM problema_secundario WHERE problema_secundario.nome = '" .$input."'";
		$resultados = $conexao->consulta($sql);
		if(!empty($resultados)){
            $problemas_secundarios = 0;
            foreach($resultados as $resultado){
                $problema_sencundario = new Problema_Secundario($resultado['ID_problema_secundario'], $resultado['nome']);
                $problemas_secundarios = $problema_sencundario->ID_problema_secundario;
            }
            return $problemas_secundarios;
        }else{
            return false;
        }
    }

}
<?php
include_once getcwd()."\db\MySQL.class.php";

class Problema_Primario{

    public $ID_problema_primario;
    public $nome;
    
    public function __construct($ID_problema_primario, $nome){
        $this->ID_problema_primario = $ID_problema_primario;
        $this->nome = $nome;
    }

    public function inserir(){
        $conexao = new MySQL();
        $sql = "INSERT INTO problema_primario(ID_problema_primario, nome) VALUES ('".$this->ID_problema_primario."', '".$this->nome."')";
        $conexao->executa($sql);
    }

    public function listar(){
        $conexao = new MySQL();
        $sql = "SELECT ID_problema_primario, nome FROM problema_primario";
		$resultados = $conexao->consulta($sql);
		if(!empty($resultados)){
            $problemas_primarios = array();
            foreach($resultados as $resultado){
                $problema_primario = new Problema_Primario($resultado['ID_problema_primario'], $resultado['nome']);
                $problemas_primarios[] = $problema_primario;
            }
            return $problemas_primarios;
        }else{
            return false;
        }
    }
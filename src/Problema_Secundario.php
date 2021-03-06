<?php
include_once getcwd()."\db\MySQL.class.php";

class Problema_Secundario{

    public $ID_problema_secundario;
    public $valor;
    public $nome;
    
    public function __construct($ID_problema_secundario, $valor, $nome){
        $this->ID_problema_secundario = $ID_problema_secundario;
        $this->valor = $valor;
        $this->nome = $nome;
    }

    public function inserir(){
        $conexao = new MySQL();
        $sql = "INSERT INTO problema_secundario(ID_problema_secundario, valor, nome) VALUES ('".$this->ID_problema_secundario."', '".$this->valor."', '".$this->nome."')";
        $conexao->executa($sql);
    }


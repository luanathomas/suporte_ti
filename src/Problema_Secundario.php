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


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


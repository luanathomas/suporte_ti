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


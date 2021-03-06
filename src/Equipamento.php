<?php
include_once getcwd()."\db\MySQL.class.php";

class Equipamento{

    public $ID_equipamento;
    public $valor;
    public $nome;
    
    public function __construct($ID_equipamento, $valor, $nome){
        $this->ID_equipamento = $ID_equipamento;
        $this->valor = $valor;
        $this->nome = $nome;
    }

    public function inserir(){
        $conexao = new MySQL();
        $sql = "INSERT INTO equipamento(ID_equipamento, valor, nome) VALUES ('".$this->ID_equipamento."', '".$this->valor."', '".$this->nome."')";
        $conexao->executa($sql);
    }


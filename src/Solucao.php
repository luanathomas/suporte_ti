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


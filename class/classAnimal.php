<?php

class classAnimal {

    //Propriedades privadas

    private $codAnimal;
    private $codCliente;
    private $nome;
    private $anoNascimento;
    private $peso;
    private $grupo;
    private $raca;
    private $genero;
    private $vacinacao;
    private $comportamento;
    private $codCliente_cliente;
    
    function getCodAnimal() {
        return $this->codAnimal;
    }

    function getCodCliente() {
        return $this->codCliente;
    }

    function getNome() {
        return $this->nome;
    }

    function getAnoNascimento() {
        return $this->anoNascimento;
    }

    function getPeso() {
        return $this->peso;
    }

    function getGrupo() {
        return $this->grupo;
    }

    function getRaca() {
        return $this->raca;
    }

    function getGenero() {
        return $this->genero;
    }

    function getVacinacao() {
        return $this->vacinacao;
    }

    function getComportamento() {
        return $this->comportamento;
    }
    
    function getCodCliente_cliente() {
        return $this->codCliente_cliente;
    }
    
    function setCodAnimal($codAnimal) {
        $this->codAnimal = $codAnimal;
    }

    function setCodCliente($codCliente) {
        $this->codCliente = $codCliente;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setAnoNascimento($anoNascimento) {
        $this->anoNascimento = $anoNascimento;
    }

    function setPeso($peso) {
        $this->peso = $peso;
    }

    function setGrupo($grupo) {
        $this->grupo = $grupo;
    }

    function setRaca($raca) {
        $this->raca = $raca;
    }

    function setGenero($genero) {
        $this->genero = $genero;
    }

    function setVacinacao($vacinacao) {
        $this->vacinacao = $vacinacao;
    }

    function setComportamento($comportamento) {
        $this->comportamento = $comportamento;
    }
    
    function setCodCliente_cliente($codCliente_cliente) {
        $this->codCliente_cliente = $codCliente_cliente;
    }

    
    
    
    
    
    // CRUD

    public function retAnimal() {
        require_once('class/ConexaoClass.php');
        $objConexao = new ConexaoClass("localhost", "root", "", "dbPetShop");
        $tableAnimal = $objConexao->selecionarDados("SELECT * FROM animal");

        return $tableAnimal;
    }

    public function inserirAnimal($objAnimal) {
        require_once('class/ConexaoClass.php');
        $objConexao = new ConexaoClass("localhost", "root", "", "dbPetShop");

        $codCliente = $objAnimal->getCodCliente();
        $nome = $objAnimal->getNome();
        $anoNascimento = $objAnimal->getAnoNascimento();
        $peso = $objAnimal->getPeso();
        $grupo = $objAnimal->getGrupo();
        $raca = $objAnimal->getRaca();
        $genero = $objAnimal->getGenero();
        $vacinacao = $objAnimal->getVacinacao();
        $comportamento = $objAnimal->getComportamento();
        $codCliente_cliente = $objAnimal->getCodCliente_cliente();



        $objConexao->exercutarComandoSQL("INSERT INTO animal (codCliente,nome,anoNascimento,peso,grupo,raca,genero,vacinacao,comportamento,codCliente_cliente) "
                . "VALUES ($codCliente,'$nome',$anoNascimento,$peso,'$grupo','$raca','$genero','$vacinacao','$comportamento','$codCliente_cliente')");

        return true;
    }

    public function editarAnimal($objAnimal) {
        require_once('class/ConexaoClass.php');
        $objConexao = new ConexaoClass("localhost", "root", "", "dbPetShop");

        $codAnimal = $objAnimal->getCodAnimal();
        $codCliente = $objAnimal->getCodCliente();
        $nome = $objAnimal->getNome();
        $anoNascimento = $objAnimal->getAnoNascimento();
        $peso = $objAnimal->getPeso();
        $grupo = $objAnimal->getGrupo();
        $raca = $objAnimal->getRaca();
        $genero = $objAnimal->getGenero();
        $vacinacao = $objAnimal->getVacinacao();
        $comportameto = $objAnimal->getComportamento();
        
        $objConexao->exercutarComandoSQL("UPDATE animal SET codCliente = '$codCliente',nome = '$nome',anoNascimento = '$anoNascimento',peso= '$peso',grupo = '$grupo',"
                . "raca = '$raca',genero = '$genero',vacinacao= '$vacinacao',comportamento = '$comportameto'");

        return true;
    }

    public function excluirAnimal($objAnimal) {
        require_once('class/ConexaoClass.php');
        $objConexao = new ConexaoClass("localhost", "root", "", "dbPetShop");

        $codAnimal = $objAnimal->getCodAnimal();
        $codCliente = $objAnimal->getCodCliente();
        $nome = $objAnimal->getNome();
        $anoNascimento = $objAnimal->getAnoNascimento();
        $peso = $objAnimal->getPeso();
        $grupo = $objAnimal->getGrupo();
        $raca = $objAnimal->getRaca();
        $genero = $objAnimal->getGenero();
        $vacinacao = $objAnimal->getVacinacao();
        $comportameto = $objAnimal->getComportamento();

        $objConexao->exercutarComandoSQL("DELETE FROM animal WHERE codAnimal = '$codAnimal'");

        return true;
    }

}

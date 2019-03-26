<?php


class classAgendar {

    //Propriedades privadas

    private $codAgendamento;
    private $codAnimal;
    private $codServico;
    private $dataPrevista;
    private $horaPrevista;
    private $observacoes;
    
    function getCodAgendamento() {
        return $this->codAgendamento;
    }

    function getCodAnimal() {
        return $this->codAnimal;
    }

    function getCodServico() {
        return $this->codServico;
    }

    function getDataPrevista() {
        return $this->dataPrevista;
    }

    function getHoraPrevista() {
        return $this->horaPrevista;
    }

    function getObservacoes() {
        return $this->observacoes;
    }

    function setCodAgendamento($codAgendamento) {
        $this->codAgendamento = $codAgendamento;
    }

    function setCodAnimal($codAnimal) {
        $this->codAnimal = $codAnimal;
    }

    function setCodServico($codServico) {
        $this->codServico = $codServico;
    }

    function setDataPrevista($dataPrevista) {
        $this->dataPrevista = $dataPrevista;
    }

    function setHoraPrevista($horaPrevista) {
        $this->horaPrevista = $horaPrevista;
    }

    function setObservacoes($observacoes) {
        $this->observacoes = $observacoes;
    }

        
    // CRUD

    public function retAgendamento() {
        require_once('class/ClassConexaoBanco.php');
        $objConexao = new ClassConexaoBanco("localhost", "root", "", "dbPetshop");
        $tableAgend = $objConexao->selecionarDados("SELECT * FROM execucaoAgendamento");

        return $tableAgend;
    }

    public function inserirFuncionario($objAgendamento) {
        require_once('class/ConexaoClass.php');
        $objConexao = new ConexaoClass("localhost", "root", "", "dbPhpBancoDados");

        $codAgendamento = $objAgendamento->getCodAgendamento();
        $codAnimal = $objAgendamento->getCodAnimal();
        $codServico = $objAgendamento->getCodServico();
        $dataPrevista = $objAgendamento->getDataPrevista();
        $horaPrevista = $objAgendamento->getHoraPrevista();
        $observacoes = $objAgendamento->getObservacoes();
        

        
        $objConexao->exercutarComandoSQL("INSERT INTO execucaoAgendamento () "
                . "VALUES ('$codAgendamento','$codAnimal','$codServico','$dataPrevista','$horaPrevista','$observacoes')");

        return true;
    }

    public function editarAgendamento($objAgendamento) {
        require_once('class/ConexaoClass.php');
        $objConexao = new ConexaoClass("localhost", "root", "", "dbPhpBancoDados");

        $codAgendamento = $objAgendamento->getCodAgendamento();
        $codAnimal = $objAgendamento->getCodAnimal();
        $codServico = $objAgendamento->getCodServico();
        $dataPrevista = $objAgendamento->getDataPrevista();
        $horaPrevista = $objAgendamento->getHoraPrevista();
        $observacoes = $objAgendamento->getObservacoes();
        

        $objConexao->exercutarComandoSQL("UPDATE execucaoAgendamento SET codAnimal = '$codAnimal',codServico = '$codServico',dataPrevista = '$dataPrevista',horaPrevista= '$horaPrevista',observacoes = '$observacoes'");

        return true;
    }

    public function excluirAgendamento($objAgendamento) {
        require_once('class/ConexaoClass.php');
        $objConexao = new ConexaoClass("localhost", "root", "", "dbPetShop");

        $codAgendamento = $objAgendamento->getCodAgendamento();
        $codAnimal = $objAgendamento->getCodAnimal();
        $codServico = $objAgendamento->getCodServico();
        $dataPrevista = $objAgendamento->getDataPrevista();
        $horaPrevista = $objAgendamento->getHoraPrevista();
        $observacoes = $objAgendamento->getObservacoes();

        $objConexao->exercutarComandoSQL("DELETE FROM execucaoAgendamento WHERE codAgendamento = '$codAgendamento'");

        return true;
    }

}

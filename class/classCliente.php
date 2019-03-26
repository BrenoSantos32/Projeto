<?php


class classCliente {

    //Propriedades privadas

    private $codCliente;
    private $dataCadastro;
    private $dataNascimento;
    private $nome;
    private $rg;
    private $telefone;
    private $email;
    private $senha;
    private $endereco;
    private $bairro;
    private $cidade;
    private $estado;
    private $pais;
    private $codTipo;
    
    function getCodCliente() {
        return $this->codCliente;
    }

    function getDataCadastro() {
        return $this->dataCadastro;
    }

    function getDataNascimento() {
        return $this->dataNascimento;
    }

    function getNome() {
        return $this->nome;
    }

    function getRg() {
        return $this->rg;
    }

    function getTelefone() {
        return $this->telefone;
    }

    function getEmail() {
        return $this->email;
    }

    function getSenha() {
        return $this->senha;
    }

    function getEndereco() {
        return $this->endereco;
    }

    function getBairro() {
        return $this->bairro;
    }

    function getCidade() {
        return $this->cidade;
    }

    function getEstado() {
        return $this->estado;
    }

    function getPais() {
        return $this->pais;
    }

    function getCodTipo() {
        return $this->codTipo;
    }

    function setCodCliente($codCliente) {
        $this->codCliente = $codCliente;
    }

    function setDataCadastro($dataCadastro) {
        $this->dataCadastro = $dataCadastro;
    }

    function setDataNascimento($dataNascimento) {
        $this->dataNascimento = $dataNascimento;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setRg($rg) {
        $this->rg = $rg;
    }

    function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }

    function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    function setBairro($bairro) {
        $this->bairro = $bairro;
    }

    function setCidade($cidade) {
        $this->cidade = $cidade;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }

    function setPais($pais) {
        $this->pais = $pais;
    }

    function setCodTipo($codTipo) {
        $this->codTipo = $codTipo;
    }

        
    // CRUD

    public function retCliente() {
        require_once('class/ConexaoClass.php');
        $objConexao = new ConexaoClass("localhost", "root", "", "dbPetshop");
        $tableCliente = $objConexao->selecionarDados("SELECT * FROM cliente");

        return $tableCliente;
    }

    public function inserirCliente($objCliente) {
        require_once('class/ConexaoClass.php');
        $objConexao = new ConexaoClass("localhost", "root", "", "dbPetShop");

        $codCliente = $objCliente->getCodCliente();
        $dataCadastro = $objCliente->getDataCadastro();
        $dataNascimento = $objCliente->getDataNascimento();
        $nome = $objCliente->getNome();
        $rg = $objCliente->getRg();
        $telefone = $objCliente->getTelefone();
        $email = $objCliente->getEmail();
        $endereco = $objCliente->getEndereco();
        $bairro = $objCliente->getNome();
        $cidade = $objCliente->getCidade();
        $estado = $objCliente->getEstado();
        $pais = $objCliente->getPais();

        
        $objConexao->exercutarComandoSQL("INSERT INTO cliente (dataCadastro,dataNascimento,nome,rg,telefone,email,endereco,bairro,cidade,estado,pais) "
                . "VALUES ('$dataCadastro','$dataNascimento','$nome','$rg','$telefone','$email','$endereco','$bairro','$cidade','$estado','$pais')");

        return true;
    }
    
    

    public function editarCliente($objCliente) {
        require_once('class/ConexaoClass.php');
        $objConexao = new ConexaoClass("localhost", "root", "", "dbPetShop");

        $codCliente = $objCliente->getCodCliente();
        $dataCadastro = $objCliente->getDataCadastro();
        $dataNascimento = $objCliente->getDataNascimento();
        $nome = $objCliente->getNome();
        $rg = $objCliente->getRg();
        $telefone = $objCliente->getTelefone();
        $email = $objCliente->getEmail();
        $endereco = $objCliente->getEndereco();
        $bairro = $objCliente->getNome();
        $cidade = $objCliente->getCidade();
        $estado = $objCliente->getEstado();
        $pais = $objCliente->getPais();
        $objConexao->exercutarComandoSQL("UPDATE cliente SET dataCadastro = '$dataCadastro',dataCadastro = '$dataNascimento',nome = '$nome',rg= '$rg',telefone = '$telefone',"
                . "email = '$email',endereco = '$endereco',bairro = '$bairro',cidade = '$cidade',estado = '$estado',pais = '$pais' WHERE codCliente = $codCliente");

        return true;
    }

    public function excluirCliente($objCliente) {
        require_once('class/ConexaoClass.php');
        $objConexao = new ConexaoClass("localhost", "root", "", "dbPetShop");

        $codCliente = $objCliente->getCodCliente();
        $dataCadastro = $objCliente->getDataCadastro();
        $dataNascimento = $objCliente->getDataNascimento();
        $nome = $objCliente->getNome();
        $rg = $objCliente->getRg();
        $telefone = $objCliente->getTelefone();
        $email = $objCliente->getEmail();
        $senha = $objCliente->getSenha();
        $endereco = $objCliente->getEndereco();
        $bairro = $objCliente->getNome();
        $cidade = $objCliente->getCidade();
        $estado = $objCliente->getEstado();
        $pais = $objCliente->getPais();
        $codTipo = $objCliente->getCodTipo();

        $objConexao->exercutarComandoSQL("DELETE FROM cliente WHERE codCliente = '$codCliente'");

        return true;
    }

}

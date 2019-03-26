<?php


class classFuncionario {

    //Propriedades privadas

    private $codFuncionario;
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

    function getCodFuncionario() {
        return $this->codFuncionario;
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

    function setCodFuncionario($codFuncionario) {
        $this->codFuncionario = $codFuncionario;
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

    public function retFuncionarios() {
        require_once('class/ConexaoClass.php');
        $objConexao = new ConexaoClass("localhost", "root", "", "dbPetshop");
        $tableFunc = $objConexao->selecionarDados("SELECT * FROM funcionario");

        return $tableFunc;
    }

    public function inserirFuncionario($objFuncionario) {
        require_once('class/ConexaoClass.php');
        $objConexao = new ConexaoClass("localhost", "root", "", "dbPetShop");

        $codFuncionario = $objFuncionario->getCodFuncionario();
        $dataCadastro = $objFuncionario->getDataCadastro();
        $dataNascimento = $objFuncionario->getDataNascimento();
        $nome = $objFuncionario->getNome();
        $rg = $objFuncionario->getRg();
        $telefone = $objFuncionario->getTelefone();
        $email = $objFuncionario->getEmail();
        $senha = $objFuncionario->getSenha();
        $endereco = $objFuncionario->getEndereco();
        $bairro = $objFuncionario->getNome();
        $cidade = $objFuncionario->getCidade();
        $estado = $objFuncionario->getEstado();
        $pais = $objFuncionario->getPais();
        $codTipo = $objFuncionario->getCodTipo();

        
        $objConexao->exercutarComandoSQL("INSERT INTO funcionario (dataCadastro,dataNascimento,nome,rg,telefone,email,senha,endereco,bairro,cidade,estado,pais,codTipo) "
                . "VALUES ('$dataCadastro','$dataNascimento','$nome','$rg','$telefone','$email','$senha','$endereco','$bairro','$cidade','$estado','$pais','$codTipo')");

        return true;
    }

    public function editarFuncionario($objFuncionario) {
        require_once('class/ConexaoClass.php');
        $objConexao = new ConexaoClass("localhost", "root", "", "dbPetShop");

        $codFuncionario = $objFuncionario->getCodFuncionario();
        $dataCadastro = $objFuncionario->getDataCadastro();
        $dataNascimento = $objFuncionario->getDataNascimento();
        $nome = $objFuncionario->getNome();
        $rg = $objFuncionario->getRg();
        $telefone = $objFuncionario->getTelefone();
        $email = $objFuncionario->getEmail();
        $senha = $objFuncionario->getSenha();
        $endereco = $objFuncionario->getEndereco();
        $bairro = $objFuncionario->getNome();
        $cidade = $objFuncionario->getCidade();
        $estado = $objFuncionario->getEstado();
        $pais = $objFuncionario->getPais();
        $codTipo = $objFuncionario->getCodTipo();

        $objConexao->exercutarComandoSQL("UPDATE funcionario SET dataCadastro = '$dataCadastro',dataCadastro = '$dataNascimento',nome = '$nome',rg= '$rg',telefone = '$telefone',"
                . "email = '$email',senha = '$senha',endereco = '$endereco',bairro = '$bairro',cidade = '$cidade',estado = '$estado',pais = '$pais',codTipo = '$codTipo',  WHERE codProfessor = '$codFuncionario'");

        return true;
    }

    public function excluirFuncionario($objFuncionario) {
        require_once('class/ConexaoClass.php');
        $objConexao = new ConexaoClass("localhost", "root", "", "dbPetShop");

        $codFuncionario = $objFuncionario->getCodFuncionario();
        $dataCadastro = $objFuncionario->getDataCadastro();
        $dataNascimento = $objFuncionario->getDataNascimento();
        $nome = $objFuncionario->getNome();
        $rg = $objFuncionario->getRg();
        $telefone = $objFuncionario->getTelefone();
        $email = $objFuncionario->getEmail();
        $senha = $objFuncionario->getSenha();
        $endereco = $objFuncionario->getEndereco();
        $bairro = $objFuncionario->getNome();
        $cidade = $objFuncionario->getCidade();
        $estado = $objFuncionario->getEstado();
        $pais = $objFuncionario->getPais();
        $codTipo = $objFuncionario->getCodTipo();

        $objConexao->exercutarComandoSQL("DELETE FROM funcionario WHERE codFuncionario = '$codFuncionario'");

        return true;
    }

}

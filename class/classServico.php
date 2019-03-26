<?php


class classServico {

    //Propriedades privadas

    
    private $codServico;
    private $nome;
    private $descricao;
    private $valorServico;
    
 

    // CRUD

    public function retServico() {
        require_once('class/ClassConexaoBanco.php');
        $objConexao = new ClassConexaoBanco("localhost", "root", "", "dbPetshop");
        $tableServico = $objConexao->selecionarDados("SELECT * FROM servico");

        return $tableServico;
    }

    public function inserirServico($objServico) {
        require_once('class/ConexaoClass.php');
        $objConexao = new ConexaoClass("localhost", "root", "", "dbPhpBancoDados");

        $codServico = $objServico->getCodServico();
        $nome = $objServico->getNome();
        $descricao = $objServico->getDescricao();
        $valorServico = $objServico->getValorServico();
        
        


        $objConexao->exercutarComandoSQL("INSERT INTO servico () "
                . "VALUES ('$codServico','$nome','$descricao','$valorServico')");

        return true;
    }

    public function editarServico($objServico) {
        require_once('class/ConexaoClass.php');
        $objConexao = new ConexaoClass("localhost", "root", "", "dbPhpBancoDados");

        $codServico = $objServico->getCodServico();
        $nome = $objServico->getNome();
        $descricao = $objServico->getDescricao();
        $valorServico = $objServico->getValorServico();
        
        
        
        $objConexao->exercutarComandoSQL("UPDATE servico SET codServico = '$codServico',nome = '$nome',descricao = $descricao',valorServico = '$valorServico'");

        return true;
    }

    public function excluirServico ($objServico) {
        require_once('class/ConexaoClass.php');
        $objConexao = new ConexaoClass("localhost", "root", "", "dbPetShop");

        $codServico = $objServico->getCodServico();
        $nome = $objServico->getNome();
        $descricao = $objServico->getDescricao();
        $valorServico = $objServico->getValorServico();
        

        $objConexao->exercutarComandoSQL("DELETE FROM servico WHERE codServico = '$codServico'");

        return true;
    }

}


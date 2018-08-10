<?php
/**
 * Created by PhpStorm.
 * User: gabri
 * Date: 14/05/2018
 * Time: 08:52
 */

require "Avaliacao.php";
require "DBconnection.php";

class AvaliacaoCrud
{
    private $conexao;

    public function getAvaliacoes()
    {
        $this->conexao = DBConnection::getConexao();
        $sql = "select * from avaliacao";
        $resultado = $this->conexao->query($sql);
        $avaliacoes = $resultado->fetchAll(PDO::FETCH_ASSOC);
        $listaAvaliacoes = [];

        foreach ($avaliacoes as $avaliacao){

            $cod = $avaliacao ['cod_avaliacao'];
            $nome = $avaliacao ['nome_avaliacao'];
            $descricao = $avaliacao ['descricao_avaliacao'];
            $objava = new Avaliacao ($cod, $nome, $descricao);
            $listaAvaliacoes [] = $objava;

        }

        return $listaAvaliacoes;



    }

    public function getAvaliacao( int $cod)
    {
        $this->conexao = DBConnection::getConexao();
        $sql = "select * from avaliacao where cod_avaliacao = ".$cod;
        $resultado = $this->conexao->query($sql);
        $avaliacao = $resultado->fetchAll(PDO::FETCH_ASSOC);
        $objava = new Avaliacao($avaliacao['cod_avaliacao'], $avaliacao['nome']);

        return $objava;
    }

    public function insertAvaliacao(Avaliacao $ava)
    {
        $this->conexao = DBConnection::getConexao();
        $dados[] = $ava->getCod();
        $dados[] = $ava->getNome();
        $dados[] = $ava->getDescricao();
        $this->conexao->exec("insert into avaliacao(nome_avaliacao,descricao_avaliacao) values('$dados[0]','$dados[1]')
    ");
    }

    public function atualizaAvaliacao(Avaliacao $ava, $cod)
    {
        $this->conexao = DBConnection::getConexao();
        $dados[] = $ava->getCod();
        $dados[] = $ava->getNome();
        $dados[] = $ava->getDescricao();
        $sql = "update avaliacao set nome_avaliacao = '$dados[0]', descricao_avaliacao = '$dados[1]' WHERE cod_avaliacao = ".$cod;
        $this->conexao->exec($sql);

    }

    public function excluirAvaliacao( int $cod)
    {
        $this->conexao = DBConnection::getConexao();
        $sql = "delete from avaliacao where cod_avaliacao =".$cod;
        $this->conexao->exec($sql);
    }
}




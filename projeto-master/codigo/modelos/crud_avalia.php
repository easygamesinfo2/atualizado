<?php
/**
 * Created by PhpStorm.
 * User: gabri
 * Date: 14/05/2018
 * Time: 08:52
 */

require "avalia.php";
require "DBconnection.php";

class crud_avalia
{
    private $conexao;

    public function get_avalias()
    {
        $this->conexao = DBConnection::getConexao();
        $sql = 'select * from avalia';
        $resultado = $this->conexao->query($sql);
        $avalias = $resultado->fetchAll(PDO::FETCH_ASSOC);
        $lista_avalias = [];

        foreach ($avalias as $avalia){

            $lista_avalias[] = new avalia($avalia['cod_avalia'], $avalia['nome'], $avalia['descricao']);

        }

        return $lista_avalias;



    }

    public function get_avalia( int $id)
    {
        $this->conexao = DBConnection::getConexao();
        $sql = 'select * from avalia where cod_avalia = '.$id;
        $resultado = $this->conexao->query($sql);
        $avalias = $resultado->fetchAll(PDO::FETCH_ASSOC);
        $lista_avalias[] = new avalia($avalias['cod_avalia'], $avalias['nome']);

        return $lista_avalias;
    }

    public function insert_avalia(avalia $not)
    {
        $this->conexao = DBConnection::getConexao();
        $dados[] = $not->getId();
        $dados[] = $not->getTitulo();
        $dados[] = $not->getDescricao();
        $this->conexao->exec("insert into avalia(nome,descricao) values('$dados[0]','$dados[1]')");
    }

    public function atualiza_avalia(avalia $not, $id)
    {
        $this->conexao = DBConnection::getConexao();
        $dados[] = $not->getId();
        $dados[] = $not->getTitulo();
        $dados[] = $not->getDescricao();
        $sql = "update avalia set nome = '$dados[0]', descricao = '$dados[1]' WHERE cod_avalia = $id";
        $this->conexao->exec($sql);

    }

    public function excluir_noticia( int $id)
    {
        $this->conexao = DBConnection::getConexao();
        $sql = 'delete from avalia where cod_avalia ='.$id;
        $this->conexao->exec($sql);
    }
}




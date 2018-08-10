<?php
/**
 * Created by PhpStorm.
 * User: gabri
 * Date: 14/05/2018
 * Time: 08:43
 */

class Avaliacao
{
    private $cod;
    private $nome;
    private $descricao;

    public function __construct($cod = null, $nome = null, $descricao = null)
    {

        $this->cod = $cod;
        $this->nome = $nome;
        $this->descricao = $descricao;
    }

    /**
     * @return mixed
     */
    public function getCod()
    {
        return $this->cod;
    }
    public function setCod($cod)
    {
        $this->cod = $cod;
    }
    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getDescricao()
    {
        return $this->descricao;
    }
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }

}


<?php
/**
 * Created by PhpStorm.
 * User: gabri
 * Date: 14/05/2018
 * Time: 08:43
 */

class avalia
{
    private $id;
    private $nome;
    private $descricao;

    public function __construct($id = null, $nome = null, $descricao = null)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->descricao = $descricao;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @return mixed
     */
    public function getDescricao()
    {
        return $this->descricao
            ;
    }


}


<?php
/**
 * Created by PhpStorm.
 * User: elviosadoc
 * Date: 02/01/19
 * Time: 19:46
 */

namespace Entity;

/**
 *
 * @Entity
 * @Table(name="funcao")
 */
class Funcao
{
    /**
     * @Id
     * @GeneratedValue(strategy="AUTO")
     * @Column(type="integer", name="id")
     */
    protected $id;

    /**
     * @Column(type="string", name="nome")
     */
    protected $nome;

    /**
     * @Column(type="integer", name="id_criador")
     */
    protected $id_criador;

    /**
     * @Column(type="string", name="data_criacao")
     */
    protected $data_criacao;

    /**
     * Departamento constructor.
     * @param $nome
     * @param $id_criador
     */
    public function __construct($nome, $id_criador)
    {
        $this->nome = $nome;
        $this->id_criador = $id_criador;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getIdCriador()
    {
        return $this->id_criador;
    }

    /**
     * @param mixed $id_criador
     */
    public function setIdCriador($id_criador)
    {
        $this->id_criador = $id_criador;
    }

    /**
     * @return mixed
     */
    public function getDataCriacao()
    {
        return $this->data_criacao;
    }

    /**
     * @param mixed $data_criacao
     */
    public function setDataCriacao($data_criacao)
    {
        $this->data_criacao = $data_criacao;
    }
}
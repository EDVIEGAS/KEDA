<?php
/**
 * Created by PhpStorm.
 * User: elviosadoc
 * Date: 25/12/18
 * Time: 08:35
 */

namespace Entity;

/**
 *
 * @Entity
 * @Table(name="role")
 */
class Role
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
     * @Column(type="string", name="sigla")
     */
    protected $sigla;

    /**
     * @Column(type="integer", name="id_utilizador")
     */
    protected $id_utilizador;

    /**
     * @Column(type="string", name="data_criacao")
     */
    protected $data_criacao;

    /**
     * Role constructor.
     * @param $nome
     * @param $sigla
     * @param $id_utilizador
     * @param $data_criacao
     */
    public function __construct($nome, $sigla, $id_utilizador)
    {
        $this->nome = $nome;
        $this->sigla = $sigla;
        $this->id_utilizador = $id_utilizador;
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
    public function getSigla()
    {
        return $this->sigla;
    }

    /**
     * @param mixed $sigla
     */
    public function setSigla($sigla)
    {
        $this->sigla = $sigla;
    }

    /**
     * @return mixed
     */
    public function getIdUtilizador()
    {
        return $this->id_utilizador;
    }

    /**
     * @param mixed $id_utilizador
     */
    public function setIdUtilizador($id_utilizador)
    {
        $this->id_utilizador = $id_utilizador;
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
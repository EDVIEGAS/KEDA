<?php
/**
 * Created by PhpStorm.
 * User: elviosadoc
 * Date: 24/08/18
 * Time: 15:25
 */

namespace Entity;

/**
 *
 * @Entity
 * @Table(name="conta")
 */
class Conta
{
    /**
     * @Id
     * @GeneratedValue(strategy="AUTO")
     * @Column(type="integer", name="id")
     */
    protected $id;

    /**
     * @Column(type="integer", name="id_cidadao")
     */
    protected $id_cidadao;

    /**
     * @Column(type="integer", name="control_cred")
     */
    protected $control_cred;

    /**
     * @Column(type="integer", name="data_criacao")
     */
    protected $data_criacao;

    /**
     * @Column(type="integer", name="criador")
     */
    protected $criador;

    /**
     * Conta constructor.
     * @param $id_cidadao
     * @param $control_cred
     * @param $criador
     */
    public function __construct($id_cidadao, $control_cred, $criador)
    {
        $this->id_cidadao = $id_cidadao;
        $this->control_cred = $control_cred;
        $this->criador = $criador;
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
    public function getIdCidadao()
    {
        return $this->id_cidadao;
    }

    /**
     * @param mixed $id_cidadao
     */
    public function setIdCidadao($id_cidadao)
    {
        $this->id_cidadao = $id_cidadao;
    }

    /**
     * @return mixed
     */
    public function getControlCred()
    {
        return $this->control_cred;
    }

    /**
     * @param mixed $control_cred
     */
    public function setControlCred($control_cred)
    {
        $this->control_cred = $control_cred;
    }

    /**
     * @return mixed
     */
    public function getCriador()
    {
        return $this->criador;
    }

    /**
     * @param mixed $criador
     */
    public function setCriador($criador)
    {
        $this->criador = $criador;
    }

}
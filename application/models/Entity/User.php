<?php
/**
 * Created by PhpStorm.
 * User: elviosadoc
 * Date: 25/08/18
 * Time: 08:27
 */

namespace Entity;

/**
 *
 * @Entity
 * @Table(name="user_teste")
 */
class User
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
     * @Column(type="string", name="user")
     */
    protected $user;

    /**
     * @Column(type="string", name="senha")
     */
    protected $senha;

    /**
     * @Column(type="integer", name="id_role")
     */
    protected $id_role;

    /**
     * @Column(type="string", name="fotografia")
     */
    protected $fotografia;

    /**
     * Utilizador constructor.
     * @param $id_cidadao
     * @param $user
     * @param $senha
     * @param $id_role
     * @param $fotografia
     */
    public function __construct($id_cidadao, $user, $senha, $id_role, $fotografia)
    {
        $this->id_cidadao = $id_cidadao;
        $this->user = $user;
        $this->senha = $senha;
        $this->id_role = $id_role;
        $this->fotografia = $fotografia;
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
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * @return mixed
     */
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * @param mixed $senha
     */
    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

    /**
     * @return mixed
     */
    public function getIdRole()
    {
        return $this->id_role;
    }

    /**
     * @param mixed $id_role
     */
    public function setIdRole($id_role)
    {
        $this->id_role = $id_role;
    }

    /**
     * @return mixed
     */
    public function getFotografia()
    {
        return $this->fotografia;
    }

    /**
     * @param mixed $fotografia
     */
    public function setFotografia($fotografia)
    {
        $this->fotografia = $fotografia;
    }


}
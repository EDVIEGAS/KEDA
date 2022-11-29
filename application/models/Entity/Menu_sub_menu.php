<?php
/**
 * Created by PhpStorm.
 * User: elviosadoc
 * Date: 22/04/18
 * Time: 14:34
 */

namespace Entity;

/**
 *
 * @Entity
 * @Table(name="menu_sub_menu")
 */
class Menu_sub_menu
{
    /**
     * @Id
     * @GeneratedValue(strategy="AUTO")
     * @Column(type="integer", name="id")
     */
    protected $id;

    /**
     * @Column(type="integer", name="id_menu")
     */
    protected $id_menu;

    /**
     * @Column(type="integer", name="id_sub_menu")
     */
    protected $id_sub_menu;

    /**
     * @Column(type="string", name="controlador")
     */
    protected $controlador;

    /**
     * @Column(type="string", name="accao")
     */
    protected $accao;

    /**
     * @Column(type="integer", name="modal")
     */
    protected $modal;/**


    * @Column(type="integer", name="id_utilizador")
     */
    protected $id_utilizador;

    /**
     * Menu_sub_menu constructor.
     * @param $id_menu
     * @param $id_sub_menu
     * @param $controlador
     * @param $accao
     * @param $id_utilizador
     */
    public function __construct($id_menu=null, $id_sub_menu=null, $controlador=null, $accao=null,$modal=null, $id_utilizador=null)
    {
        $this->id_menu = $id_menu;
        $this->id_sub_menu = $id_sub_menu;
        $this->controlador = $controlador;
        $this->accao = $accao;
        $this->modal=$modal;
        $this->id_utilizador = $id_utilizador;
    }

    /**
     * @return mixed
     */
    public function getIdMenu()
    {
        return $this->id_menu;
    }

    /**
     * @param mixed $id_menu
     */
    public function setIdMenu($id_menu)
    {
        $this->id_menu = $id_menu;
    }

    /**
     * @return mixed
     */
    public function getIdSubMenu()
    {
        return $this->id_sub_menu;
    }

    /**
     * @param mixed $id_sub_menu
     */
    public function setIdSubMenu($id_sub_menu)
    {
        $this->id_sub_menu = $id_sub_menu;
    }

    /**
     * @return mixed
     */
    public function getControlador()
    {
        return $this->controlador;
    }

    /**
     * @param mixed $controlador
     */
    public function setControlador($controlador)
    {
        $this->controlador = $controlador;
    }

    /**
     * @return mixed
     */
    public function getAccao()
    {
        return $this->accao;
    }

    /**
     * @param mixed $accao
     */
    public function setAccao($accao)
    {
        $this->accao = $accao;
    }

    /**
     * @return mixed
     */
    public function getModal()
    {
        return $this->modal;
    }

    /**
     * @param mixed $modal
     */
    public function setModal($modal)
    {
        $this->modal = $modal;
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



}
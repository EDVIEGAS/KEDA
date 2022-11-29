<?php 

namespace Entity;

    /**
    *
    * @Entity
    * @Table(name="menu")
    */
    class Menu
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
         * @Column(type="integer", name="id_utilizador")
         */
        protected $id_utilizador;

        /**
         * Menu constructor.
         * @param $nome
         * @param $id_utilizador
         */
        public function __construct($nome=null, $id_utilizador=null)
        {
            $this->nome = $nome;
            $this->id_utilizador = $id_utilizador;
        }

        public function getId()
        {
            return $this->id;
        }

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
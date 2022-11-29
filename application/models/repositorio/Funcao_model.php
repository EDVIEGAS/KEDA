<?php
/**
 * Created by PhpStorm.
 * User: elviosadoc
 * Date: 02/01/19
 * Time: 19:47
 */

class Funcao_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function store(\Entity\Funcao $funcao)
    {
        if ($funcao->getNome()!=null || $funcao->getNome()!=0)
        {
            /*$this->doctrine->em->persist($funcao);
            $this->doctrine->em->flush();
            return $funcao->getId();*/
            $this->db->insert('funcao',$funcao)
            $this->db->insert_id();
        }
        return 0;
    }

    public function listar()
    {
        return $this->db->query('select f.*, u.user from funcao f, user_teste u where f.id_criador=u.id')->result();
    }
}
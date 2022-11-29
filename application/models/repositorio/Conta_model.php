<?php

/**
 * Created by PhpStorm.
 * User: elviosadoc
 * Date: 24/08/18
 * Time: 15:25
 */
class Conta_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function store(\Entity\Conta $conta)
    {
        if ($conta->getIdCidadao()!=null || $conta->getIdCidadao()!=0)
        {
            /*$this->doctrine->em->persist($conta);
            $this->doctrine->em->flush();*/
            $this->db->insert('conta',$conta);
            return $this->db->insert_id();
            //return $conta->getId();
        }
        return 0;
    }
}
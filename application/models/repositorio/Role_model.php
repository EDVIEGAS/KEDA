<?php
/**
 * Created by PhpStorm.
 * User: elviosadoc
 * Date: 25/12/18
 * Time: 08:43
 */



class Role_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function store($role=null)
    {
        if ($role!=null)
        {
            /*$this->doctrine->em->persist($role);
            $this->doctrine->em->flush();
            return $role->getId();*/
            $this->db->insert('role',$role);
            return $this->db->insert_id();
        }
        return 0;
    }
}
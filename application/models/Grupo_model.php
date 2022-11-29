<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: elviosadoc
 * Date: 17/04/18
 * Time: 08:57
 */
class Grupo_model extends CI_Model
{
    public function listar()
    {
        $query = $this->db->get('role');
        return $query->result();
    }
}
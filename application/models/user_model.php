<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class user_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }


    function change_userqr($user_id,$user_qr)
    {
        $this->db->where('user_id', $user_id);
        $this->db->set('user_qrcode',$user_qr);
        $this->db->update('ci_users');
    }
    function get_users_one($id)
    {
        $this->db->where('user_id', $id);
        $result = $this->db->get('ci_users');
        return $result->row();
    }

    function get_random_user()
    {
        $this->db->order_by('user_id', 'RANDOM');
        $this->db->limit(1);
        $result = $this->db->get('ci_users');
        return $result->row();
    }
}

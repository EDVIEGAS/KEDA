<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class send_notificationModel extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }


    function sendNotication($dados)
    {
      if($dados == NULL) return 0;
  		if($this->db->insert('notifications', $dados))
  		{
  			return 1;
  		}
  		return 2;
    }

    function receiveNotification3($id)
    {
        $this->db->where('user_id', $id);
        $result = $this->db->get('ci_users');
        return $result->row();
    }

    function receiveNotification()
    {
        $query = $this->db->query("select count(*) as total_notification from notifications where is_read=0 and user_idReceive=".$this->session->userdata("id_usuario"))->result()[0];

        return $query->total_notification;
    }

    function read_notification($id)
    {
        // $query = $this->db->query("update notifications set is_read=1 where id='".$id."' and user_idReceive=".$this->session->userdata("id_usuario"))->result();

        if($this->db->query("update notifications set is_read=1 where id='".$id."' and user_idReceive=".$this->session->userdata("id_usuario")) == true){
          return 1;
        }else{
          return 2;
        }
    }

    public function validar_trocaAtleta($id = null, $dados = null){
  		if ($id == null) return 0;
  		$this->db->where('id_mestre',$id);
  		if ($this->db->update('mestre',$dados)) {
  			return 1;
  		}else{
  			return 2;
  		}
  	}

    function AllNotification()
    {
        $query = $this->db->query("select * from notifications
        inner join utilizador on utilizador.id_usuario = notifications.user_id
        where is_read=0 and user_idReceive=".$this->session->userdata("id_usuario")." order by is_read ASC")->result();

        return $query;
    }

    function AllNotificationCaixa()
    {
        $query = $this->db->query("select * from notifications
        inner join utilizador on utilizador.id_usuario = notifications.user_id
        where user_idReceive=".$this->session->userdata("id_usuario")." order by is_read ASC")->result();

        return $query;
    }

    function AllNotificationcaixaSaida()
    {
        $query = $this->db->query("select * from notifications
        inner join utilizador on utilizador.id_usuario = notifications.user_idReceive
        where user_id=".$this->session->userdata("id_usuario")." order by is_read ASC")->result();

        return $query;
    }

    function verMensagem($id)
    {
        $query = $this->db->query("select * from notifications
        inner join utilizador on utilizador.id_usuario = notifications.user_id
        where id='".$id."' and user_idReceive=".$this->session->userdata("id_usuario")." order by is_read ASC")->result()[0];

        return $query;
    }

    function conteudo($id)
    {
        $query = $this->db->query("select conteudo from notifications
        where id='".$id."' and user_idReceive=".$this->session->userdata("id_usuario"))->result()[0];

        return $query->conteudo;
    }

}

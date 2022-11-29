<?php defined('BASEPATH') OR exit('No direct script access alloweds');

/**
 * 
 */
class Formando_Model extends CI_Model
{
	public function entrar($dados = NULL)
	{
		if ($dados != NULL):
			$this->db->where('username',$dados['user']);
			$this->db->where('senha',$dados['senha']);
			$result = $this->db->get('utilizador')->result();
			if (count($result) > 0):
				return $result[0];
			else:
				return 0;
			endif;
		endif;
	}

	public function role($id_role = null)
	{
       $query = $this->db->query('select nome_role from role where id='.$id_role)->result();
       return $query[0];
	}
	
	public function login_utilizador($dados = null){
		$this->db->insert('login_utilizador',$dados);
	}

	public function login_utilizador2($id = null, $dados = null){
		$this->db->where('id_usuario', $id);
		$this->db->update('utilizador', $dados);
	}

	public function login_utilizador3($id = null, $dados = null){
		$this->db->where('id_utilizador', $id);
		$this->db->update('login_utilizador', $dados);
	}
}

?>
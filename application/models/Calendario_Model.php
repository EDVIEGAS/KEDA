<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Calendario_Model extends CI_Model
{
	

	
	public function trocarEstado($id = NULL, $dado = null)
		{
	    	if ($id == NULL) return 0;
				$this->db->where('id_academia',$id);
			if ($this->db->update('academia',$dado)) {
				return 1;
			}else{
				return 2;
			}
	}

	public function totalAtletaAcademia($id = NULL)
	{
	  $query = $this->db->query('SELECT * FROM pessoa ps, atleta at, inf_tecnica it, academia ac, estilo_jujitsu est, endereco1 ende WHERE it.id_academia_c = ac.id_academia AND it.id_inf_tecnica = at.id_infor_tecnica AND ac.idestilo = est.id_estilo AND ende.id_endereco = ps.id_endereco_fk1 AND ps.id_pessoa = at.id_pessoa AND ac.id_academia='.$id)->num_rows();
	  return $query;
	}

	public function totalMasculino($id = NULL){
		$query = $this->db->query('SELECT * FROM pessoa ps, atleta at, inf_tecnica it, academia ac, estilo_jujitsu est, endereco1 ende WHERE it.id_academia_c = ac.id_academia AND it.id_inf_tecnica = at.id_infor_tecnica AND ac.idestilo = est.id_estilo AND ende.id_endereco = ps.id_endereco_fk1 AND ps.id_pessoa = at.id_pessoa AND ps.genero="Masculino" and ac.id_academia='.$id)->num_rows();
		return $query;
	}

	public function totalFemenino($id = NULL){
		$query = $this->db->query('SELECT * FROM pessoa ps, atleta at, inf_tecnica it, academia ac, estilo_jujitsu est, endereco1 ende WHERE it.id_academia_c = ac.id_academia AND it.id_inf_tecnica = at.id_infor_tecnica AND ac.idestilo = est.id_estilo AND ende.id_endereco = ps.id_endereco_fk1 AND ps.id_pessoa = at.id_pessoa AND ps.genero="Femenino" and ac.id_academia='.$id)->num_rows();
		return $query;
	}


	public function pergarAtletaAcademia777($id = NULL)
	{
	  $query = $this->db->query('SELECT * FROM pessoa ps, atleta at, inf_tecnica it, academia ac, estilo_jujitsu est, endereco1 ende WHERE it.id_academia_c = ac.id_academia AND it.id_inf_tecnica = at.id_infor_tecnica AND ac.idestilo = est.id_estilo AND ende.id_endereco = ps.id_endereco_fk1 AND ps.id_pessoa = at.id_pessoa AND at.id_atleta='.$id)->result();
	  return $query;
	}

	public function addAtleta($dados = NULL)
	{
		if($dados == NULL) return 0;
		if($this->db->insert('Atleta', $dados))
		{  
			$ultimo_id = $this->db->insert_id();
			return $ultimo_id;
		}
		return 2;
	}

	public function addResponsavel($dados = NULL)
	{
		//if ($dados == NULL) return 0;
		$this->db->insert('responsavel',$dados);
		return $this->db->insert_id();
	}

	public function addInf_tecnica($dados = NULL)
	{
		$this->db->insert('inf_tecnica',$dados);
		return $this->db->insert_id();
	}

	public function getIdAtleta($id = NULL)
	{
		if ($id != NULL) {
			$this->db->where('id_atleta', $id);
			return $this->db->get('Atleta')->result();
		}else{
			return 0;
		}

	}

	public function addParticipanteEvento($dados = null)
	{
		if($dados == NULL) return 0;

		if($this->db->insert('evento_participante', $dados))
		{  
			return 1;
		}else{
			return 2;
		}
    }

	
	public function getAllActividade($ano = null, $id = null){
		// return $this->db->query('select id_actividade id,nome_actividade title,data_inicio start,data_fim end,color color from actividade2')->result();

		if($id == null){
			return $this->db->query('select id_actividade id,nome_actividade title,data_inicio start,data_fim end,color color from actividade2 where ano_calendario ='.$ano.' and id_associacao_pro=0')->result();
		}else{
			return $this->db->query('select id_actividade id,nome_actividade title,data_inicio start,data_fim end,color color from actividade2 where ano_calendario ='.$ano.' and id_associacao_pro='.$id)->result();
		}
	}

	public function getAllTipoActividade(){
		$query = $this->db->query('SELECT * FROM tipo_actividade')->result();
		return $query;
	}

	public function getActividadeById($id = null){
		return $this->db->query('SELECT * FROM actividade2 WHERE id_actividade = ?', array($id))->result();
	}

	// public function getAllPartEvente($id = null){
	// 	return $this->db->query('SELECT * FROM evento_participante
	// 	INNER JOIN evento ON evento.id_evento = evento_participante.id_evento
	// 	INNER JOIN mestre ON mestre.id_mestre = evento_participante.id_mestre
	// 	INNER JOIN inf_tecnica ON inf_tecnica.id_inf_tecnica = mestre.id_infor_tecnica
	// 	INNER JOIN estilo_jujitsu ON estilo_jujitsu.id_estilo = inf_tecnica.id_estilo
	// 	INNER JOIN pessoa ON pessoa.id_pessoa = mestre.id_pessoa
	// 	INNER JOIN associacao_provincia ON associacao_provincia.id_associacao_pro = mestre.id_associacao_pro
	// 	INNER JOIN actividade2 ON actividade2.id_actividade = evento.id_actividade
	// 	WHERE actividade2.id_actividade =?',array($id))->result();
	// }

	public function getAllEvento(){
		return $this->db->query('select * from actividade2')->result();
	}

	function get_calendario_actividade($ano = null, $id = null)
	{
		if($id == null){
			return $this->db->query('select * from actividade2 where ano_calendario ='.$ano.' and id_associacao_pro=0')->result();
		}else{
			return $this->db->query('select * from actividade2 where ano_calendario ='.$ano.' and id_associacao_pro='.$id)->result();
		}
	
	}

	public function getAcademias()
	{
		return $this->db->get('academia')->result();
	}

	function excluirEvento($id = null)
	{
		if ($id != null) {
		 $this->db->where('id_actividade',$id);
		 if ($this->db->delete('actividade2')) {
		 	return true; 
		 }else{
		 	return false;
		 }
		}else{
			return 3;
		}
	}

	function getEvento($id = null){
		if($id == null){
			echo 'erro';
		}else{
			$query = $this->db->query('select id_evento from evento where id_actividade = ?', array($id))->result();
			return $query[0]->id_evento;
		}
	}



}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 */
class Academia_Model extends CI_Model
{


	public function pergarAtletaAcademia($id = NULL, $idAssociacao = null)
	{
	  $query = $this->db->query('SELECT * FROM mestre
			inner join inf_tecnica on inf_tecnica.id_inf_tecnica = mestre.id_infor_tecnica
			inner join estilo_jujitsu on estilo_jujitsu.id_estilo = inf_tecnica.id_estilo
			inner join pessoa on pessoa.id_pessoa = mestre.id_pessoa
			inner join endereco1 on endereco1.id_endereco = pessoa.id_endereco_fk1
			inner join academia on academia.id_academia = inf_tecnica.id_academia_c
			where inf_tecnica.id_academia_c='.$id.' and mestre.id_associacao_pro ='.$idAssociacao)->result();
	  return $query;
	}

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

	public function totalAtletaAcademia($id = NULL, $idAssociacao = null)
	{
	  $query = $this->db->query('SELECT * FROM mestre
			inner join inf_tecnica on inf_tecnica.id_inf_tecnica = mestre.id_infor_tecnica
			inner join pessoa on pessoa.id_pessoa = mestre.id_pessoa
			inner join endereco1 on endereco1.id_endereco = pessoa.id_endereco_fk1
			inner join academia on academia.id_academia = inf_tecnica.id_academia_c
			where inf_tecnica.id_academia_c='.$id.' and mestre.id_associacao_pro ='.$idAssociacao)->num_rows();

	  return $query;
	}

	public function totalMasculino($id = NULL, $idAssociacao = null){
		$query = $this->db->query('SELECT * FROM mestre
			inner join inf_tecnica on inf_tecnica.id_inf_tecnica = mestre.id_infor_tecnica
			inner join pessoa on pessoa.id_pessoa = mestre.id_pessoa
			inner join endereco1 on endereco1.id_endereco = pessoa.id_endereco_fk1
			inner join academia on academia.id_academia = inf_tecnica.id_academia_c
			where pessoa.genero="Masculino" and inf_tecnica.id_academia_c='.$id.' and mestre.id_associacao_pro ='.$idAssociacao)->num_rows();

		return $query;
	}

	public function totalFemenino($id = NULL, $idAssociacao = null){
		$query = $this->db->query('SELECT * FROM mestre
			inner join inf_tecnica on inf_tecnica.id_inf_tecnica = mestre.id_infor_tecnica
			inner join pessoa on pessoa.id_pessoa = mestre.id_pessoa
			inner join endereco1 on endereco1.id_endereco = pessoa.id_endereco_fk1
			inner join academia on academia.id_academia = inf_tecnica.id_academia_c
			where pessoa.genero="Femenino" and inf_tecnica.id_academia_c='.$id.' and mestre.id_associacao_pro ='.$idAssociacao)->num_rows();

		return $query;
	}


	public function pergarAtletaAcademia777($id = NULL)
	{
	  $query = $this->db->query('SELECT * FROM pessoa ps,mestre at, inf_tecnica it, academia ac, estilo_jujitsu est, endereco1 ende WHERE it.id_academia_c = ac.id_academia AND it.id_inf_tecnica = at.id_infor_tecnica AND ac.idestilo = est.id_estilo AND ende.id_endereco = ps.id_endereco_fk1 AND ps.id_pessoa = at.id_pessoa AND at.id_mestre='.$id)->result();
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

	public function getIdAtletaInfTecn($id = NULL)
	{
		if($id == NULL) return 0;
		//$query = $this->db->query('select peso,graduacao,mestre,academia frommestre join inf_tecnica onmestre.id_tecnica = inf_tecnica.id_inf_tecnica')->result();
		$query = $this->db->query('SELECT at.*, it.*,ac.* FROMmestre at, inf_tecnica it, academia ac WHERE it.id_academia_c = ac.id_academia AND it.id_inf_tecnica = at.id_tecnica AND at.id_atleta='.$id)->result();
		return $query;
	}

	public function getAll(){

		return $this->db->get('Atleta')->result();
	}

	public function getAcademias()
	{
		return $this->db->get('academia')->result();
	}

	public function excluirAcademia($id = NULL){

		if($id != NULL){
			$this->db->where('id_academia', $id);
			if($this->db->delete('academia')):
				return 1;
			else:
				return 2;
			endif;
		}else{
			return 0;
		}
	}



}

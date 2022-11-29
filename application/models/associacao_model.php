<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 */
class associacao_model extends CI_Model
{
	public function trocarEstado($id_associacao_pro = null, $dado = null)
		{
	    	if ($id_associacao_pro == NULL) return 0;
				$this->db->where('id_associacao_pro',$id_associacao_pro);
			if ($this->db->update('associacao_provincia',$dado)) {
				return 1;
			}else{
				return 2;
			}
	}

	public function setAllSecretarioPresidente(){

		$id_mandato_atual2 = $this->db->query('SELECT id_mandato_atual FROM mandato_atual')->result()[0];
		$id_mandato_atual = $id_mandato_atual2->id_mandato_atual;

		$participantes = $this->db->query('SELECT nome, nome_cargo_membro FROM menbro_orgao WHERE id_mandato_fk = "'.$id_mandato_atual.'" AND id_orgao_fk = 2 AND nome_cargo_membro = "Presidente" OR nome_cargo_membro = "Secretario geral"')->result();
		return $participantes;

	}

	public function getAssociacao($id = null){
		$query = $this->db->query('select * from associacao_provincia where id_associacao_pro='.$id)->result();
		return $query;
	}

	public function totalcademias($id = null){
		$query = $this->db->query('select count(*) as totalAcademias from academia where id_associacao_pro='.$id)->result();
		return $query;
	}

	public function verAssociacaoAtletas($id = NULL){

      $query = $this->db->query('select * from pessoa as ps
	  inner join mestre on ps.id_pessoa = mestre.id_pessoa
	  inner join endereco1 on ps.id_endereco_fk1 = endereco1.id_endereco
	  inner join associacao_provincia on associacao_provincia.id_associacao_pro = mestre.id_associacao_pro
	  inner join inf_tecnica on inf_tecnica.id_inf_tecnica = mestre.id_infor_tecnica
	  inner join estilo_jujitsu on estilo_jujitsu.id_estilo = inf_tecnica.id_estilo
	  inner join academia on academia.id_academia = inf_tecnica.id_academia_c
	  where mestre.id_associacao_pro='.$id)->result();
	  return $query;

	}

	public function verAssociacaoAtletasClubes($idClube = NULL, $idAssociacao = NULL){

      $query = $this->db->query('select * from pessoa as ps
	  inner join mestre on ps.id_pessoa = mestre.id_pessoa
	  inner join endereco1 on ps.id_endereco_fk1 = endereco1.id_endereco
	  inner join associacao_provincia on associacao_provincia.id_associacao_pro = mestre.id_associacao_pro
	  inner join inf_tecnica on inf_tecnica.id_inf_tecnica = mestre.id_infor_tecnica
	  inner join estilo_jujitsu on estilo_jujitsu.id_estilo = inf_tecnica.id_estilo
	  inner join academia on academia.id_academia = inf_tecnica.id_academia_c
	  where inf_tecnica.id_academia_c='.$idClube.' and mestre.id_associacao_pro='.$idAssociacao)->result();
	  return $query;

	}

	public function verAssociacaoArbitro($id = NULL){

		$query = $this->db->query('select * from pessoa as ps
		inner join arbitro on ps.id_pessoa = arbitro.id_pessoa
		inner join endereco1 on ps.id_endereco_fk1 = endereco1.id_endereco
		inner join associacao_provincia on associacao_provincia.id_associacao_pro = arbitro.id_associacao_pro
		inner join inf_tecnica on inf_tecnica.id_inf_tecnica = arbitro.id_infor_tecnica
		inner join categoria_arbitro_subcategoria_arbitro on inf_tecnica.id_catArbitro_subcatArbitro = categoria_arbitro_subcategoria_arbitro.id_categoria_arbitro_subcategoria_arbitro
		where arbitro.id_associacao_pro='.$id)->result();

		return $query;

	}

	public function verAssociacaoAtletasTotal($id = NULL){
		$query = $this->db->query('select count(*) as total from mestre as atl
		inner join pessoa ps on ps.id_pessoa = atl.id_pessoa
		inner join endereco1 as ende on ende.id_endereco = ps.id_endereco_fk1
		inner join inf_tecnica as inf on inf.id_inf_tecnica = atl.id_infor_tecnica
		inner join academia as acad on acad.id_academia = inf.id_academia_c
		where atl.id_associacao_pro='.$id)->result();
		return $query;

	}

	public function verAssociacaoClubes($id = null){
	   $query = $this->db->query('select * from academia as acad inner join estilo_jujitsu est on acad.idestilo = est.id_estilo where id_associacao_pro='.$id)->result();
	   return $query;
	}

	public function pergarAtletaAcademia($id = NULL)
	{
	  $query = $this->db->query('SELECT * FROM pessoa ps, mestre at, inf_tecnica it, academia ac, estilo_jujitsu est, endereco1 ende WHERE it.id_academia_c = ac.id_academia AND it.id_inf_tecnica = at.id_infor_tecnica AND ac.idestilo = est.id_estilo AND ende.id_endereco = ps.id_endereco_fk1 AND ps.id_pessoa = at.id_pessoa AND ac.id_academia='.$id)->result();
	  return $query;
	}

	public function totalAtletaAcademia($id = NULL)
	{
	  $query = $this->db->query('SELECT * FROM pessoa ps, mestre at, inf_tecnica it, academia ac, estilo_jujitsu est, endereco1 ende WHERE it.id_academia_c = ac.id_academia AND it.id_inf_tecnica = at.id_infor_tecnica AND ac.idestilo = est.id_estilo AND ende.id_endereco = ps.id_endereco_fk1 AND ps.id_pessoa = at.id_pessoa AND ac.id_academia='.$id)->num_rows();
	  return $query;
	}

	public function totalMasculino($id = NULL){
		$query = $this->db->query('SELECT * FROM pessoa ps, mestre at, inf_tecnica it, academia ac, estilo_jujitsu est, endereco1 ende WHERE it.id_academia_c = ac.id_academia AND it.id_inf_tecnica = at.id_infor_tecnica AND ac.idestilo = est.id_estilo AND ende.id_endereco = ps.id_endereco_fk1 AND ps.id_pessoa = at.id_pessoa AND ps.genero="Masculino" and ac.id_academia='.$id)->num_rows();
		return $query;
	}

	public function totalFemenino($id = NULL){
		$query = $this->db->query('SELECT * FROM pessoa ps, mestre at, inf_tecnica it, academia ac, estilo_jujitsu est, endereco1 ende WHERE it.id_academia_c = ac.id_academia AND it.id_inf_tecnica = at.id_infor_tecnica AND ac.idestilo = est.id_estilo AND ende.id_endereco = ps.id_endereco_fk1 AND ps.id_pessoa = at.id_pessoa AND ps.genero="Femenino" and ac.id_academia='.$id)->num_rows();
		return $query;
	}


	public function pergarAtletaAcademia777($id = NULL)
	{
	  $query = $this->db->query('SELECT * FROM pessoa ps, mestre at, inf_tecnica it, academia ac, estilo_jujitsu est, endereco1 ende WHERE it.id_academia_c = ac.id_academia AND it.id_inf_tecnica = at.id_infor_tecnica AND ac.idestilo = est.id_estilo AND ende.id_endereco = ps.id_endereco_fk1 AND ps.id_pessoa = at.id_pessoa AND at.id_atleta='.$id)->result();
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
		//$query = $this->db->query('select peso,graduacao,mestre,academia from mestre join inf_tecnica on mestre.id_tecnica = inf_tecnica.id_inf_tecnica')->result();
		$query = $this->db->query('SELECT at.*, it.*,ac.* FROM mestre at, inf_tecnica it, academia ac WHERE it.id_academia_c = ac.id_academia AND it.id_inf_tecnica = at.id_tecnica AND at.id_atleta='.$id)->result();
		return $query;
	}

	public function getAll(){

		return $this->db->get('associacao_provincia')->result();
	}

	public function getAllAssociacao2(){

		return $this->db->query('select * from associacao_provincia where statu="Activo"')->result();
	}

	public function getAllAssociacao3(){

		$options = "<option value='{0}'>Selecione a Associacao</option>";
		$associacao = $this->getAllAssociacao2();

		foreach ($associacao as $associacao) {
			$options .= "<option value = '{$associacao->id_associacao_pro}'>{$associacao->descricao_associacao}</option>";
		}
		return $options;
	}

	public function getAllAssociacao(){

		return $this->db->query('select * from utilizador where id_role="56"')->result();
	}

	public function getAcademias()
	{
		return $this->db->get('academia')->result();
	}

	public function excluirAtleta($id = NULL){

		if($id != NULL){
			$this->db->where('id_atleta', $id);
			if($this->db->delete('Atleta')):
				return 1;
			else:
				return 2;
			endif;
		}else{
			return 0;
		}
	}

	public function controlAss($id = null){
		$query8 = $this->db->query("SELECT id_mandato FROM mandato WHERE id_associacao_pro=".$id)->result();
		if(!empty($query8)){
    		return 1;
		}else{
			return 2;
		}

	}

	public function getPresidenteAssociacao($id = null){
		$query8 = $this->db->query("SELECT id_mandato FROM mandato WHERE id_associacao_pro=".$id)->result()[0];
		$id_mandato = $query8->id_mandato;

		$participantes = $this->db->query('SELECT nome, nome_cargo_membro FROM menbro_orgao WHERE id_mandato_fk = "'.$id_mandato.'" AND id_orgao_fk = 2 AND nome_cargo_membro = "Presidente"')->result();
		return $participantes;
	}

	public function getMembroOrgaoSocial($id = null){

		$query8 = $this->db->query("SELECT id_mandato FROM mandato WHERE id_associacao_pro=".$id)->result()[0];
		$id_mandato = $query8->id_mandato;

		$query34 = $this->db->query('SELECT * from menbro_orgao
		inner join mandato ON menbro_orgao.id_mandato_fk = mandato.id_mandato
		inner join orgao_social ON menbro_orgao.id_orgao_fk = orgao_social.id_orgao_social
		where menbro_orgao.id_mandato_fk ='.$id_mandato);

		$data = array();

		foreach($query34->result() as $orgao){

			$data["$orgao->id_orgao_fk"]=array(
				'id_membro' => $orgao->id_membro,
				'descricao' => $orgao->descricao,
				'membros' => array()
			);

			$membros = $this->db->query("select * from menbro_orgao
			inner join mandato ON menbro_orgao.id_mandato_fk = mandato.id_mandato
			inner join orgao_social ON menbro_orgao.id_orgao_fk = orgao_social.id_orgao_social
			where menbro_orgao.id_mandato_fk= $orgao->id_mandato_fk AND menbro_orgao.id_orgao_fk =".$orgao->id_orgao_fk)->result();

			foreach($membros as $membro){
				$data["$orgao->id_orgao_fk"]['membros']["$membro->id_membro"] = array(
					'id_membro' => $membro->id_membro,
					'nome_cargo_membro' => $membro->nome_cargo_membro,
					'telefone' => $membro->telefone,
					'nome' => $membro->nome,
					'imagem_membro' => $membro->imagem_membro
				);
			}
		}

		return $data;
	}

}

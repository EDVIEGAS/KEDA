<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mandato_model extends CI_Model
{

	function __construct()
	{
		parent::__construct();
	}

	public function setmembroMandato($id = null){

		$query34 = $this->db->query('SELECT * from menbro_orgao
		inner join mandato ON menbro_orgao.id_mandato_fk = mandato.id_mandato
		inner join orgao_social ON menbro_orgao.id_orgao_fk = orgao_social.id_orgao_social
		where menbro_orgao.id_mandato_fk ='.$id);

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

	public function getmandatoControl($id = null)
	{
		return $this->db->query('SELECT * FROM mandato_atual')->result();
	}

	public function getmandatoControlAss($id = null)
	{
		return $this->db->query('SELECT * FROM mandato_atual_associacao maa, mandato m WHERE m.id_mandato = maa.id_mandato_a AND m.id_associacao_pro='.$id)->result()[0];
	}

	public function setmandato($dados = null)
	{
		if($this->db->insert('mandato',$dados)){
			$ultimo_id = $this->db->insert_id();
			return $ultimo_id;
		}else{
            return 2;
		}
	}

	public function getMandatoDirigentes($id_associacao_pro = null, $escolha = null){

		$ano_actual = date('Y');

		if($id_associacao_pro == 0){

		$query = $this->db->query('SELECT * FROM menbro_orgao WHERE menbro_orgao.id_orgao_fk = "'.$escolha.'" and menbro_orgao.id_mandato_fk in
		(SELECT id_mandato_atual FROM `mandato_atual` WHERE id_mandato_atual in
		 (SELECT id_mandato FROM `mandato` WHERE year(data_inicio_mandato) ="'.$ano_actual.'" and mandato.id_associacao_pro ="'.$id_associacao_pro.'"))')->result();

		}else{
			$query = $this->db->query('SELECT * FROM menbro_orgao WHERE menbro_orgao.id_mandato_fk in
		(SELECT id_mandato_a FROM `mandato_atual_associacao` WHERE id_mandato_a in
		 (SELECT id_mandato FROM `mandato` WHERE year(data_inicio_mandato) ="'.$ano_actual.'" and mandato.id_associacao_pro ="'.$id_associacao_pro.'"))')->result();

		}

		return $query;
	}

	public function getIDParticipanteDirigente($id_membro){

		$query = $this->db->query('SELECT * FROM menbro_orgao WHERE id_membro='.$id_membro)->result();

		return $query;

	}

	public function setmandatoAtual($id = null, $dados = null){
		if ($id == null) return 0;
		$this->db->where('id_mandato_a',$id);
		if ($this->db->update('mandato_atual',$dados)) {
			return 1;
		}else{
			return 2;
		}
	}

	public function setmandatoActual2($dados = null)
	{
		if($this->db->insert('mandato_atual',$dados)){
			$ultimo_id = $this->db->insert_id();
			return $ultimo_id;
		}else{
            return 2;
		}
	}

	public function setmandatoAssActual($dados = null)
	{
		if($this->db->insert('mandato_atual_associacao',$dados)){
			$ultimo_id = $this->db->insert_id();
			return $ultimo_id;
		}else{
            return 2;
		}
	}

	public function setmandatoAtualAss($id = null, $dados = null){
		if ($id == null) return 0;
		$this->db->where('id_mandato_atual_associacao',$id);
		if ($this->db->update('mandato_atual_associacao',$dados)) {
			return 1;
		}else{
			return 2;
		}
	}


	public function getmandato($id = null)
	{
		$retorno = $this->db->query('SELECT * FROM mandato WHERE id_mandato ='.$id)->result();
		return $retorno;

	}

	public function getmandatoAss($id = null)
	{
		$retorno = $this->db->query('SELECT * FROM mandato WHERE id_mandato ='.$id)->result();
		return $retorno;

	}

	public function getmandatoLista($id = null)
	{
		$retorno = $this->db->query('select * from menbro_orgao, orgao_social, cargos, mandato where menbro_orgao.id_orgao_fk = orgao_social.id_orgao_social and menbro_orgao.id_cargo_fk = cargos.id_cargos and menbro_orgao.id_mandato_fk = mandato.id_mandato and id_mandato='.$id)->result();
		return $retorno;
	}

	function getAllMandato($id = null)
	{
		if(!empty($id)){
			$resultado = $this->db->query("SELECT * FROM mandato WHERE id_associacao_pro=".$id)->result();
		}else{
			$resultado = $this->db->query("SELECT * FROM mandato WHERE id_associacao_pro=0")->result();
		}

		return $resultado;
	}

	function getAllMandatoAtual()
	{
		$this->db->select('*');
		$resultado = $this->db->get("mandato_atual")->result();
		if($resultado == null){
			 return 0;
		}else{
			return $resultado[0]->id_mandato_atual;
		}

	}

	function getAllMandatoAtualAss()
	{

		$resultado = $this->db->get("mandato_atual_associacao")->result()[0];
		if($resultado == null){
			echo 'retorno vazio';
		}else{
			return $resultado->id_mandato_a;
		}

	}

	public function EditarDadosMembro($id = NULL, $dado = null)
	{
    	if ($id == NULL) return 0;
			$this->db->where('id_membro',$id);
		if ($this->db->update('menbro_orgao',$dado)) {
			return 1;
		}else{
			return 2;
		}
	}

	public function getSomaMembros($id = NULL)
	{
    	$retorno = $this->db->query('SELECT count(*) as quantidade FROM menbro_orgao where id_mandato_fk='.$id)->result();
		return $retorno[0]->quantidade;
	}

	public function getAllMembrosDirigentes($id = NULL)
	{
    	$retorno = $this->db->query('SELECT * FROM menbro_orgao where id_mandato_fk='.$id)->result();
		return $retorno[0]->quantidade;
	}
}

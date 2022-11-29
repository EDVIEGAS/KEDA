<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 */
class atleta_Model extends CI_Model
{
	public function trocarEstado($id = NULL, $dado = null)
		{
	    	if ($id == NULL) return 0;
				$this->db->where('id_atleta',$id);
			if ($this->db->update('Atleta',$dado)) {
				return 1;
			}else{
				return 2;
			}
	}

	public function getStatu($id = null)
	{
		$query = $this->db->query('select statu_mestre from mestre where id_atleta='.$id)->result();

		return $query[0]->statu;
	}

    public function getImagem($id = null)
    {
    	$imagem = $this->db->query('select imagem from pessoa where id_pessoa ='.$id)->result();
    	return $imagem;
    }

	public function totalAtleta()
	{
		return $this->db->query('SELECT count(*) as quantidade FROM mestre')->result();
	}

	public function totalAtletaMasculino()
	{
		 $query = $this->db->query('SELECT count(*) as totalAtletaMasculino FROM mestre
			inner join pessoa on pessoa.id_pessoa = mestre.id_pessoa
			where genero = "Masculino"
		')->result()[0];

		return $query->totalAtletaMasculino;
	}

	public function totalAtletaFemenino()
	{
		$query = $this->db->query('SELECT count(*) as totalAtletaFemenino FROM mestre
			inner join pessoa on pessoa.id_pessoa = mestre.id_pessoa
			where genero = "Femenino"
		')->result()[0];

		return $query->totalAtletaFemenino;
	}

    public function addAtleta1($dados = NULL)
	{
		if($dados == NULL) return 0;
		if($this->db->insert('Atleta', $dados))
		{
			return 1;
		}
		return 2;
	}

	public function addPessoa($dados = NULL)
	{
		if($dados == NULL) return 0;
		if($this->db->insert('pessoa', $dados))
		{
			$ultimo_id = $this->db->insert_id();
			return $ultimo_id;
		}
		return 2;
	}

	public function addAtleta($dados = NULL)
	{
		if($dados == NULL) return 0;
		if($this->db->insert('atleta', $dados))
		{
			$ultimo_id = $this->db->insert_id();
			return $ultimo_id;
		}
		return 2;
	}

	public function AddEndereco($dados = NULL)
	{
		if ($dados == null) return 0;
		if($this->db->insert('endereco1',$dados)){
			$ultimo_id_endereco = $this->db->insert_id();
			return $ultimo_id_endereco;
		}else{
			return 3;
		}
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

	public function getEstilo_juj(){
		return $this->db->get('estilo_jujitsu')->result();
	}


	public function getIdAtletaInfTecn($id = NULL)
	{
		if($id == NULL) return 0;
		// $query = $this->db->query('SELECT * FROM pessoa ps, mestre at, inf_tecnica it, academia ac, estilo_jujitsu est, endereco1 ende WHERE it.id_academia_c = ac.id_academia AND it.id_inf_tecnica = at.id_infor_tecnica AND ac.idestilo = est.id_estilo AND ende.id_endereco = ps.id_endereco_fk1 AND ps.id_pessoa = at.id_pessoa AND at.id_atleta='.$id)->result();
		$query = $this->db->query('select * from pessoa as ps
		inner join mestre on ps.id_pessoa = mestre.id_pessoa
		inner join endereco1 on ps.id_endereco_fk1 = endereco1.id_endereco
		inner join associacao_provincia on associacao_provincia.id_associacao_pro = mestre.id_associacao_pro
		inner join inf_tecnica on inf_tecnica.id_inf_tecnica = mestre.id_infor_tecnica
		inner join estilo_jujitsu on estilo_jujitsu.id_estilo = inf_tecnica.id_estilo
		inner join academia on academia.id_academia = inf_tecnica.id_academia_c AND mestre.id_mestre='.$id
		)->result();

		return $query;
	}

	public function getAll(){

		if($id == NULL) return 0;
		$query = $this->db->query('SELECT * FROM pessoa ps, mestre at, inf_tecnica it, academia ac, estilo_jujitsu est, endereco1 ende WHERE it.id_academia_c = ac.id_academia AND it.id_inf_tecnica = at.id_inf_tecnica AND ac.idestilo = est.id_estilo AND ende.id_endereco = ps.id_endereco_fk1 AND ps.id_pessoa = at.id_pessoa AND at.id_atleta='.$id)->result();
		return $query;
	}

	public function getAllAtletaByBilhete($binhete = null, $id_associacao_pro = null){

		if($binhete == NULL) return 0;
		$query = $this->db->query('SELECT * FROM pessoa ps, mestre at, inf_tecnica it, academia ac, estilo_jujitsu est, endereco1 ende WHERE it.id_academia_c = ac.id_academia AND it.id_inf_tecnica = at.id_infor_tecnica AND ac.idestilo = est.id_estilo AND ende.id_endereco = ps.id_endereco_fk1 AND ps.n_bilhete like "%'.$binhete.'%" and at.id_associacao_pro ='.$id_associacao_pro)->result();

        return $query;

	}

	public function getRespAtleta()
	{

		$query = $this->db->query('SELECT mestre.*, responsavel.* FROM mestre LEFT OUTER JOIN responsavel ON responsavel.id_responsavel = mestre.id_responsavel_at')->result();
		return $query;
	}

	public function getAllAtleta()
	{
		$query = $this->db->query('select * from pessoa as ps
		inner join mestre on ps.id_pessoa = mestre.id_pessoa
		inner join endereco1 on ps.id_endereco_fk1 = endereco1.id_endereco
		inner join associacao_provincia on associacao_provincia.id_associacao_pro = mestre.id_associacao_pro
		inner join inf_tecnica on inf_tecnica.id_inf_tecnica = mestre.id_infor_tecnica
		inner join estilo_jujitsu on estilo_jujitsu.id_estilo = inf_tecnica.id_estilo
		inner join academia on academia.id_academia = inf_tecnica.id_academia_c
		')->result();
		return $query;
	}

	// public function getAllAtleta()
	// {
	// 	$query = $this->db->query('select * from pessoa as ps inner join mestre on ps.id_pessoa = mestre.id_pessoa inner join endereco1 on ps.id_endereco_fk1 = endereco1.id_endereco inner join inf_tecnica on inf_tecnica.id_inf_tecnica = mestre.id_infor_tecnica inner join academia on academia.id_academia = inf_tecnica.id_academia_c')->result();
	// 	return $query;
	// }

	function listar_atleta_competidor_veterano($id = null, $anoInicial,$escalao)
	{

			$resultado = $this->db->query('select * from pessoa as ps
			inner join mestre on ps.id_pessoa = mestre.id_pessoa
			inner join endereco1 on ps.id_endereco_fk1 = endereco1.id_endereco
			inner join associacao_provincia on associacao_provincia.id_associacao_pro = mestre.id_associacao_pro
			inner join inf_tecnica on inf_tecnica.id_inf_tecnica = mestre.id_infor_tecnica
			inner join estilo_jujitsu on estilo_jujitsu.id_estilo = inf_tecnica.id_estilo
			inner join academia on academia.id_academia = inf_tecnica.id_academia_c
			where mestre.statu_mestre = "Activo" and year(ps.data_nascimento) <= '.$anoInicial.' and mestre.id_associacao_pro ='.$id
			)->result();

			return $resultado;

	}

	function listar_atleta_competidor_outros($id, $anoInicial,$anoFinal,$genero){
        if($genero != "Todos"){

			$resultado = $this->db->query('select * from pessoa as ps
			inner join mestre on ps.id_pessoa = mestre.id_pessoa
			inner join endereco1 on ps.id_endereco_fk1 = endereco1.id_endereco
			inner join associacao_provincia on associacao_provincia.id_associacao_pro = mestre.id_associacao_pro
			inner join inf_tecnica on inf_tecnica.id_inf_tecnica = mestre.id_infor_tecnica
			inner join estilo_jujitsu on estilo_jujitsu.id_estilo = inf_tecnica.id_estilo
			inner join academia on academia.id_academia = inf_tecnica.id_academia_c
			where mestre.statu_mestre = "Activo" and year(ps.data_nascimento) >= '.$anoInicial.' and year(ps.data_nascimento) <= '.$anoFinal.' and ps.genero ="'.$genero.'" and mestre.id_associacao_pro ='.$id
			)->result();

		}else{

			$resultado = $this->db->query('select * from pessoa as ps
			inner join mestre on ps.id_pessoa = mestre.id_pessoa
			inner join endereco1 on ps.id_endereco_fk1 = endereco1.id_endereco
			inner join associacao_provincia on associacao_provincia.id_associacao_pro = mestre.id_associacao_pro
			inner join inf_tecnica on inf_tecnica.id_inf_tecnica = mestre.id_infor_tecnica
			inner join estilo_jujitsu on estilo_jujitsu.id_estilo = inf_tecnica.id_estilo
			inner join academia on academia.id_academia = inf_tecnica.id_academia_c
			where mestre.statu_mestre = "Activo" and year(ps.data_nascimento) >= '.$anoInicial.' and year(ps.data_nascimento) <= '.$anoFinal.' and mestre.id_associacao_pro ='.$id
			)->result();

		}

			return $resultado;

	}

	function listar_atleta_competidor_outros2($anoInicial,$anoFinal,$genero){
        if($genero != "Todos"){

			$resultado = $this->db->query('select * from pessoa as ps
			inner join mestre on ps.id_pessoa = mestre.id_pessoa
			inner join endereco1 on ps.id_endereco_fk1 = endereco1.id_endereco
			inner join associacao_provincia on associacao_provincia.id_associacao_pro = mestre.id_associacao_pro
			inner join inf_tecnica on inf_tecnica.id_inf_tecnica = mestre.id_infor_tecnica
			inner join estilo_jujitsu on estilo_jujitsu.id_estilo = inf_tecnica.id_estilo
			inner join academia on academia.id_academia = inf_tecnica.id_academia_c
			where mestre.statu_mestre = "Activo" and ps.genero ="'.$genero.'"')->result();

		}else{

			$resultado = $this->db->query('select * from pessoa as ps
			inner join mestre on ps.id_pessoa = mestre.id_pessoa
			inner join endereco1 on ps.id_endereco_fk1 = endereco1.id_endereco
			inner join associacao_provincia on associacao_provincia.id_associacao_pro = mestre.id_associacao_pro
			inner join inf_tecnica on inf_tecnica.id_inf_tecnica = mestre.id_infor_tecnica
			inner join estilo_jujitsu on estilo_jujitsu.id_estilo = inf_tecnica.id_estilo
			inner join academia on academia.id_academia = inf_tecnica.id_academia_c
			where mestre.statu_mestre = "Activo" and year(ps.data_nascimento) >= '.$anoInicial.' and year(ps.data_nascimento) <= '.$anoFinal)->result();

		}

			return $resultado;

	}

	function listar_atleta_id($id = null, $id_atleta = null)
	{
		$resultado = $this->db->query('select * from pessoa as ps
		inner join mestre on ps.id_pessoa = mestre.id_pessoa
		inner join endereco1 on ps.id_endereco_fk1 = endereco1.id_endereco
		inner join associacao_provincia on associacao_provincia.id_associacao_pro = mestre.id_associacao_pro
		inner join inf_tecnica on inf_tecnica.id_inf_tecnica = mestre.id_infor_tecnica
		inner join estilo_jujitsu on estilo_jujitsu.id_estilo = inf_tecnica.id_estilo
		inner join academia on academia.id_academia = inf_tecnica.id_academia_c where mestre.id_associacao_pro='.$id
		)->result();

		return $resultado;

	}

	function listar_atleta_idSelecionado($id_associacao_pro = null, $id_atleta = null)
	{
		$resultado = $this->db->query('select * from pessoa as ps
		inner join mestre on ps.id_pessoa = mestre.id_pessoa
		inner join endereco1 on ps.id_endereco_fk1 = endereco1.id_endereco
		inner join associacao_provincia on associacao_provincia.id_associacao_pro = mestre.id_associacao_pro
		inner join inf_tecnica on inf_tecnica.id_inf_tecnica = mestre.id_infor_tecnica
		inner join estilo_jujitsu on estilo_jujitsu.id_estilo = inf_tecnica.id_estilo
		inner join academia on academia.id_academia = inf_tecnica.id_academia_c where mestre.id_associacao_pro='.$id_associacao_pro.' and mestre.id_mestre='.$id_atleta)->result();

		return $resultado;

	}

	function listar_atleta_idSelecionado2($id_atleta = null)
	{
		$resultado = $this->db->query('select * from pessoa as ps
		inner join mestre on ps.id_pessoa = mestre.id_pessoa
		inner join endereco1 on ps.id_endereco_fk1 = endereco1.id_endereco
		inner join associacao_provincia on associacao_provincia.id_associacao_pro = mestre.id_associacao_pro
		inner join inf_tecnica on inf_tecnica.id_inf_tecnica = mestre.id_infor_tecnica
		inner join estilo_jujitsu on estilo_jujitsu.id_estilo = inf_tecnica.id_estilo
		inner join academia on academia.id_academia = inf_tecnica.id_academia_c where mestre.id_mestre='.$id_atleta)->result();

		return $resultado;

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

	public function actualizarPessoa($id = null, $dados = null){
		if ($id == null) return 0;
		$this->db->where('id_pessoa',$id);
		if ($this->db->update('pessoa',$dados)) {
			return 1;
		}else{
			return 2;
		}
	}

	public function actualizarEndereco($id = null, $dados = null){
		if ($id == null) return 0;
		$this->db->where('id_endereco',$id);
		if ($this->db->update('endereco1',$dados)) {
			return 1;
		}else{
			return 2;
		}
	}

	public function actualizarFiliacao($id = null, $dados = null){
		if ($id == null) return 0;
		$this->db->where('id_inf_tecnica',$id);
		if ($this->db->update('inf_tecnica',$dados)) {
			return 1;
		}else{
			return 2;
		}
	}

	public function actualizarTecnica($id = null, $dados = null){
		if ($id == null) return 0;
		$this->db->where('id_inf_tecnica',$id);
		if ($this->db->update('inf_tecnica',$dados)) {
			return 1;
		}else{
			return 2;
		}
	}

	public function AtualizarAtleta($id = NULL,$dados = NULL){
		if ($id == NULL) return 0;
			$this->db->where('id_atleta',$id);
		if ($this->db->update('atleta',$dados)) {
			return 1;
		}else{
			return 2;
		}
	}

	public function ApagarFoto($id = null){
        if ($id == null) return 0;
        $query = $this->db->query('UPDATE pessoa set imagem="" where id_pessoa='.$id);

        return $query;

	}

}

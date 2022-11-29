<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 */
class treinador_model extends CI_Model
{


	public function addTreinador($dados = NULL)
	{
		if($dados == NULL) return 0;
		if($this->db->insert('treinador', $dados))
		{
			$ultimo_id = $this->db->insert_id();
			return $ultimo_id;
		}
		return 2;
	}

	public function AllTreinador(){
		$query = $this->db->query('SELECT * FROM mestre
		INNER JOIN pessoa ON pessoa.id_pessoa = mestre.id_pessoa
		INNER JOIN endereco1 ON endereco1.id_endereco = pessoa.id_endereco_fk1
		INNER JOIN inf_tecnica ON inf_tecnica.id_inf_tecnica = mestre.id_infor_tecnica
		INNER JOIN estilo_jujitsu ON estilo_jujitsu.id_estilo = inf_tecnica.id_estilo
		LEFT JOIN academia ON academia.id_academia = inf_tecnica.id_academia_c
		INNER JOIN associacao_provincia ON associacao_provincia.id_associacao_pro = mestre.id_associacao_pro
		INNER JOIN treinador ON treinador.id_mestre = mestre.id_mestre
		')->result();
		return $query;
	}

	public function GetTreinadorNivel($nivel = null){
		$query = $this->db->query('SELECT * FROM mestre
		INNER JOIN pessoa ON pessoa.id_pessoa = mestre.id_pessoa
		INNER JOIN endereco1 ON endereco1.id_endereco = pessoa.id_endereco_fk1
		INNER JOIN inf_tecnica ON inf_tecnica.id_inf_tecnica = mestre.id_infor_tecnica
		INNER JOIN estilo_jujitsu ON estilo_jujitsu.id_estilo = inf_tecnica.id_estilo
		LEFT JOIN academia ON academia.id_academia = inf_tecnica.id_academia_c
		INNER JOIN associacao_provincia ON associacao_provincia.id_associacao_pro = mestre.id_associacao_pro
		INNER JOIN treinador ON treinador.id_mestre = mestre.id_mestre
		where treinador.categoriaTreinador ='.$nivel)->result();
		return $query;
	}


}

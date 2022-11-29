<?php

class Provincia extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
	}

    public function getProvinciaById($id = null)
    {
       $provincia = $this->db->query('select nome_provincia from provincia where id_provincia ='.$id)->result();
       foreach ($provincia as $provinciaa) {
            return $provinciaa->nome_provincia;
       }
    }

    public function getAllProv()
    {
    	return $this->db->query('select * from provincia')->result();
    }

	public function getAll()
	{
		return $this->db->order_by('nome_provincia')->get('provincia');
	}

	function selectProvincia()
	{
		$options = "<option value='{0}'>Selecione a Provincia</option>";
		$provincias = $this->getAll();

		foreach ($provincias->result() as $provincia) {
			$options .= "<option value = '{$provincia->id_provincia}'>{$provincia->nome_provincia}</option>";
		}
		return $options;
	}

	function getIdAssociacao($dados = null){

		$query = $this->db->query("SELECT id_associacao_pro FROM associacao_provincia WHERE descricao_associacao='$dados'")->result();
		$retorno = $query[0]->id_associacao_pro;
		return $retorno;
	}

	function selectProvincia2()
	{
		$options = "<option value='{0}'>Selecione a Provincia</option>";
		$provincias = $this->getAll();

		foreach ($provincias->result() as $provincia) {
			$options .= "<option value = '{$provincia->id_provincia}'>{$provincia->nome_provincia}</option>";
		}
		return $options;
	}

	function selectProvincia3()
	{
		$descricao = $this->session->userdata('nome');
		$query = $this->db->query("SELECT id_associacao_pro, descricao_associacao FROM associacao_provincia WHERE descricao_associacao = '$descricao'")->result();

		$options = "<option value='{0}'>Selecione a Provincia</option>";
		$options .= "<option value = '{$query[0]->id_associacao_pro}'>{$query[0]->descricao_associacao}</option>";

		return $options;
	}

}

?>

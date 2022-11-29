<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class seminarios_outros extends CI_Model
{
	
	public function setgraduacaofederacao($dados = null)
	{
		if($dados == NULL) return 0;
		if($this->db->insert('graduacaofederacao', $dados))
		{  
			$ultimo_id = $this->db->insert_id();
			return $ultimo_id;;
		}
		return 2;

	}

	public function BuscarInformGraduacao(){

		$query = $this->db->query('select * from faixas_seminario where id_')->result();
	}

	public function setgraduacaofederacaoFaixas($dados = null)
	{
		if($dados == NULL) return 0;
		if($this->db->insert('faixas_seminario', $dados))
		{  
			$ultimo_id = $this->db->insert_id();
			return $ultimo_id;;
		}
		return 2;

	}

    public function setgraduacaofederacaoSeminario($dados = null)
	{
		if($dados == NULL) return 0;
		if($this->db->insert('seminariograduacao', $dados))
		{  
			return 1;
		}
		return 2;

	}

	public function getParticipantesSeminario($id = null){
		$query = $this->db->query('select * from participante_actividade where id_participanteActividade='.$id)->result()[0];
		return $query;
	}

    public function setParticipanteGraduacao($dados = null)
	{
		if($dados == NULL) return 0;
		if($this->db->insert('participante_actividade', $dados))
		{  
			return 1;
		}
		return 2;

	}

    public function setAllParticipanteSeminario($id = null){
		$participantes = $this->db->query('SELECT * FROM participante_actividade 
		WHERE id_actividade='.$id)->result();
		return $participantes;
	}

	public function setAllParticipanteSeminario2($id = null){
		$participantes = $this->db->query('SELECT * FROM participante_actividade 
		WHERE status="Aprovado" AND id_actividade='.$id)->result();
		return $participantes;
	}

	public function controlTelasEsconder($dados = null){
		$this->db->where('id_controlTelas',1);
		if ($this->db->update('controltelas',$dados)) {
			return 1;
		}else{
			return 2;
		}
	}

	public function controlarStatusParticipante($id = null,$dados = null){
		$this->db->where('id_participanteActividade',$id);
		if ($this->db->update('participante_actividade',$dados)) {
			return 1;
		}else{
			return 2;
		}
	}

	public function controlarStatusActividade($id = null,$dados = null){

		$this->db->where('id_actividade',$id);
		if ($this->db->update('actividade2',$dados)) {
			return 1;
		}else{
			return 2;
		}
		
	}

	public function alterarTipoParticipante($id = null,$dados = null){

		$this->db->where('id_participanteActividade',$id);
		if ($this->db->update('participante_actividade',$dados)) {
			return 1;
		}else{
			return 2;
		}
		
	}

	public function eliminarParticipanteActividadeT($id = NULL){

		if($id != NULL){
			$this->db->where('id_participanteActividade', $id);
			if($this->db->delete('participante_actividade')):
				return 1;
			else:
				return 2;
			endif;
		}else{
			return 0;
		}
	}


}
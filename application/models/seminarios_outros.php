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

	public function BuscarInformGraduacao($id = null){

		$query = $this->db->query('select descricao from faixas_seminario where id_graduacaofederacao='.$id)->result();
		return $query;

	}

	public function BuscarInformGraduacaoMAX($id = null){

			$query = $this->db->query('select max(descricao) as desMax from faixas_seminario where id_graduacaofederacao='.$id)->result()[0];
			return $query;

	}

	public function BuscarInformGraduacaoCarencia($id = null){

			$query = $this->db->query('SELECT MAX(dataProxGraduacao) as carenciaGra FROM `participante_actividade` WHERE bilhete_identidade like "%'.$id.'%"')->result()[0];
			return $query;

	}

	public function getSeminario(){

		$query = $this->db->query('select * from graduacaofederacao
		inner join local_campeonato on local_campeonato.id_local_campeonato = graduacaofederacao.cidadePais where controlTela = 4')->result();
		return $query;

	}

	public function updateControlTelaGraduacao($id = null, $dados = null){
		$this->db->where('id_graduacaofederacao', $id);
		$this->db->update('graduacaofederacao', $dados);
	}

	public function setGraduacaoControlModal($id = null, $dados = null){
		$this->db->where('id', $id);
		$this->db->update('graduacaofederacao_atual', $dados);
	}

	public function getGraduacaoAtual($bilhete){
		$query = $this->db->query('select * from participante_actividade where bilhete_identidade like "%'.$bilhete.'%" and id_graduacaoFk in (SELECT idGraduacao FROM graduacaofederacao_atual)')->result();
		return $query;
	}

	public function geTverificarclassificacaoBlankGraduacao($id = null){

		$query = $this->db->query('select * from participante_actividade where id_graduacaoFk='.$id)->result();
		return $query;

	}

	public function getDescricaoGraduacao($id = null){

		$query = $this->db->query('SELECT descricao_graduacao FROM `seminariograduacao` WHERE id_graduacaofederacao ='.$id)->result();
		return $query;

	}

	public function BuscarInformGraduacao2($id = null){

		$query = $this->db->query('select descricao from faixas_seminario where id_graduacaofederacao='.$id)->result();
		return $query;

	}

	public function verificartipoGraduacao($id, $descricao){

		$query = $this->db->query("select * from faixas_seminario where descricao ='".$descricao."' and id_graduacaofederacao =".$id)->result();

		return $query;

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

	public function verificarBilheteParticipanteGraduacao($id = null,$bilhete = null){
		$query = $this->db->query('select * from participante_actividade where bilhete_identidade like "%'.$bilhete.'%" and id_graduacaoFk ='.$id)->result()[0];
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
		WHERE id_graduacaoFk ='.$id)->result();
		return $participantes;
	}

	public function setAllParticipanteSeminario2($id = null){

		$participantes = $this->db->query('SELECT * FROM participante_actividade
		WHERE status="Aprovado" AND id_graduacaoFk ='.$id)->result();

		return $participantes;
	}

	public function setAllParticipanteSeminario7($id = null){

		$participantes = $this->db->query('SELECT * FROM participante_actividade
		WHERE id_graduacaoFk ='.$id)->result();

		return $participantes;
	}

	public function setAllParticipanteSeminario3($id = null){

		$participantes = $this->db->query('select * from graduacaofederacao
		inner join local_campeonato on local_campeonato.id_local_campeonato = graduacaofederacao.cidadePais
		inner join participante_actividade on participante_actividade.id_graduacaoFk = graduacaofederacao.id_graduacaofederacao
		WHERE status="Aprovado" AND id_graduacaofederacao ='.$id)->result();

		return $participantes;
	}

	public function setAllParticipanteSeminario6($id = null){

		$participantes = $this->db->query('select nova_graduacao,bilhete_identidade,id_participanteActividade from graduacaofederacao
		inner join local_campeonato on local_campeonato.id_local_campeonato = graduacaofederacao.cidadePais
		inner join participante_actividade on participante_actividade.id_graduacaoFk = graduacaofederacao.id_graduacaofederacao
		WHERE status="Aprovado" AND id_graduacaofederacao ='.$id)->result();

		return $participantes;
	}

	public function setByBilheteParticipanteSeminario6($id = null){

		$participantes = $this->db->query('SELECT id_infor_tecnica from mestre where id_pessoa in (SELECT id_pessoa FROM `pessoa` WHERE n_bilhete like "%'.$id.'%")')->result()[0];

		return $participantes->id_infor_tecnica;
	}

	public function updateInfoGraduacaoMestre($id = null, $dados = null){

		$this->db->where('id_inf_tecnica',$id);
		if ($this->db->update('inf_tecnica',$dados)) {
			return 1;
		}else{
			return 2;
		}

	}

	public function updateNovaGraduacaoMestre($id = null, $dados = null){

		$this->db->where('id_participanteActividade',$id);
		if ($this->db->update('participante_actividade',$dados)) {
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

	public function atribuirQrCode($id = null,$dados = null){

		$this->db->where('id_participanteActividade',$id);
		if ($this->db->update('participante_actividade',$dados)) {
			return 1;
		}else{
			return 2;
		}

	}

	public function atribuirQrCodeMestre($id = null,$dados = null){

		$this->db->where('id_mestre',$id);
		if ($this->db->update('mestre',$dados)) {
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

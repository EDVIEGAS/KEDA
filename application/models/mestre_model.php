<?php

	class mestre_model extends CI_Model
	{

		public function getCategoria()
		{
			$result = $this->db->query('select * from categoria_arbitro')->result();
			return $result;
		}

		public function getSubCategoria()
		{
			$result = $this->db->query('select * from sub_categoria_arbitro')->result();
			return $result;
		}

		public function pessoa($dados = null)
		{
			if($dados == NULL) return 0;

			if($this->db->insert('pessoa', $dados))
			{
				$ultimo_id = $this->db->insert_id();
				return $ultimo_id;
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

        public function addMestre($dados = null)
		{
			if($dados == NULL) return 0;

			if($this->db->insert('mestre', $dados))
			{
				return 1;
			}else{
				return 2;
			}
        }

        public function addcategoria_subcategoria($dados = NULL)
		{
			$this->db->insert('categoria_arbitro_subcategoria_arbitro',$dados);
			return $this->db->insert_id();
		}


        public function addInf_tecnica($dados = NULL)
		{
			$this->db->insert('inf_tecnica',$dados);
			return $this->db->insert_id();
		}

		public function getAllMestre($idAssociacao = null)
		{
			if($idAssociacao == null){

					$query = $this->db->query('SELECT * FROM mestre
					INNER JOIN pessoa ON pessoa.id_pessoa = mestre.id_pessoa
					INNER JOIN endereco1 ON endereco1.id_endereco = pessoa.id_endereco_fk1
					INNER JOIN inf_tecnica ON inf_tecnica.id_inf_tecnica = mestre.id_infor_tecnica
					LEFT JOIN academia ON academia.id_academia = inf_tecnica.id_academia_c
					INNER JOIN estilo_jujitsu ON estilo_jujitsu.id_estilo = inf_tecnica.id_estilo
					INNER JOIN associacao_provincia ON associacao_provincia.id_associacao_pro = mestre.id_associacao_pro
					where inf_tecnica.graduacao < 11 order by mestre.data_cadastro DESC

					')->result();

      }else{
				$query = $this->db->query('SELECT * FROM mestre
				INNER JOIN pessoa ON pessoa.id_pessoa = mestre.id_pessoa
				INNER JOIN endereco1 ON endereco1.id_endereco = pessoa.id_endereco_fk1
				INNER JOIN inf_tecnica ON inf_tecnica.id_inf_tecnica = mestre.id_infor_tecnica
				LEFT JOIN academia ON academia.id_academia = inf_tecnica.id_academia_c
				INNER JOIN estilo_jujitsu ON estilo_jujitsu.id_estilo = inf_tecnica.id_estilo
				INNER JOIN associacao_provincia ON associacao_provincia.id_associacao_pro = mestre.id_associacao_pro
				where inf_tecnica.graduacao >= 11 or inf_tecnica.graduacao = 0 and mestre.id_associacao_pro ='.$idAssociacao.' order by mestre.data_cadastro ASC')->result();
			}

			return $query;
		}

		function listar_mestre_id($id = null)
		{
			$resultado = $this->db->query('SELECT * FROM mestre
			INNER JOIN pessoa ON pessoa.id_pessoa = mestre.id_pessoa
			INNER JOIN endereco1 ON endereco1.id_endereco = pessoa.id_endereco_fk1
			INNER JOIN inf_tecnica ON inf_tecnica.id_inf_tecnica = mestre.id_infor_tecnica
			LEFT JOIN academia ON academia.id_academia = inf_tecnica.id_academia_c
			INNER JOIN estilo_jujitsu ON estilo_jujitsu.id_estilo = inf_tecnica.id_estilo
			INNER JOIN associacao_provincia ON associacao_provincia.id_associacao_pro = mestre.id_associacao_pro
			where inf_tecnica.graduacao >= 11 or inf_tecnica.graduacao = 0 and mestre.id_associacao_pro='.$id.' order by mestre.data_cadastro ASC'
			)->result();
			return $resultado;

		// $resultado = $this->db->query('select * from pessoa as ps
		// inner join atleta on ps.id_pessoa = atleta.id_pessoa
		// inner join endereco1 on ps.id_endereco_fk1 = endereco1.id_endereco
		// inner join inf_tecnica on inf_tecnica.id_inf_tecnica = atleta.id_infor_tecnica
		// inner join academia on academia.id_academia = inf_tecnica.id_academia_c and atleta.id_associacao_pro='.$id)->result();
		// return $resultado;
		}


		public function trocarEstado($id = NULL, $dado = null)
		{
	    	if ($id == NULL) return 0;
				$this->db->where('id_mestre',$id);
			if ($this->db->update('mestre',$dado)) {
				return 1;
			}else{
				return 2;
			}
		}

		public function getAllMestreByBilhete99($binhete = NULL)
		{

			$query = $this->db->query('SELECT * FROM mestre
			INNER JOIN pessoa ON pessoa.id_pessoa = mestre.id_pessoa
			INNER JOIN endereco1 ON endereco1.id_endereco = pessoa.id_endereco_fk1
			INNER JOIN inf_tecnica ON inf_tecnica.id_inf_tecnica = mestre.id_infor_tecnica
			INNER JOIN estilo_jujitsu ON estilo_jujitsu.id_estilo = inf_tecnica.id_estilo
			LEFT JOIN academia ON academia.id_academia = inf_tecnica.id_academia_c
			INNER JOIN associacao_provincia ON associacao_provincia.id_associacao_pro = mestre.id_associacao_pro
			WHERE pessoa.n_bilhete like "%'.$binhete.'%"')->result();

			return $query;

		}

		public function getAllMestreByBilhete($binhete = NULL){

            $control = array();

			if($binhete == NULL) return 0;
			// $query = $this->db->query('SELECT * FROM pessoa ps, atleta at, inf_tecnica it, academia ac, estilo_jujitsu est, endereco1 ende WHERE it.id_academia_c = ac.id_academia AND it.id_inf_tecnica = at.id_infor_tecnica AND ac.idestilo = est.id_estilo AND ende.id_endereco = ps.id_endereco_fk1 AND ps.n_bilhete like "%'.$binhete.'%"')->result();
			$query = $this->db->query('SELECT * FROM mestre
			INNER JOIN pessoa ON pessoa.id_pessoa = mestre.id_pessoa
			INNER JOIN endereco1 ON endereco1.id_endereco = pessoa.id_endereco_fk1
			INNER JOIN inf_tecnica ON inf_tecnica.id_inf_tecnica = mestre.id_infor_tecnica
			INNER JOIN estilo_jujitsu ON estilo_jujitsu.id_estilo = inf_tecnica.id_estilo
			LEFT JOIN academia ON academia.id_academia = inf_tecnica.id_academia_c
			INNER JOIN associacao_provincia ON associacao_provincia.id_associacao_pro = mestre.id_associacao_pro
			WHERE pessoa.n_bilhete like "%'.$binhete.'%"')->result();

			// array_push($control, 1);
			// array_push($control, $query);

			// if(count($query) == 0){

			// 	$control = array();

			// 	$query = $this->db->query('SELECT * FROM atleta
			// 	INNER JOIN pessoa ON pessoa.id_pessoa = atleta.id_pessoa
			// 	INNER JOIN endereco1 ON endereco1.id_endereco = pessoa.id_endereco_fk1
			// 	INNER JOIN inf_tecnica ON inf_tecnica.id_inf_tecnica = atleta.id_infor_tecnica
			// 	INNER JOIN estilo_jujitsu ON estilo_jujitsu.id_estilo = inf_tecnica.id_estilo
			// 	LEFT JOIN academia ON academia.id_academia = inf_tecnica.id_academia_c
			// 	INNER JOIN associacao_provincia ON associacao_provincia.id_associacao_pro = atleta.id_associacao_pro
			// 	WHERE pessoa.n_bilhete like "%'.$binhete.'%"')->result();

			// array_push($control, 2);
			// array_push($control, $query);


			// }

			return $query;

		}

		public function getAllMestreByBilheteAtleta($binhete = NULL){

			if($binhete == NULL) return 0;
			// $query = $this->db->query('SELECT * FROM pessoa ps, atleta at, inf_tecnica it, academia ac, estilo_jujitsu est, endereco1 ende WHERE it.id_academia_c = ac.id_academia AND it.id_inf_tecnica = at.id_infor_tecnica AND ac.idestilo = est.id_estilo AND ende.id_endereco = ps.id_endereco_fk1 AND ps.n_bilhete like "%'.$binhete.'%"')->result();
			$query = $this->db->query('SELECT * FROM mestre
			INNER JOIN pessoa ON pessoa.id_pessoa = mestre.id_pessoa
			INNER JOIN endereco1 ON endereco1.id_endereco = pessoa.id_endereco_fk1
			INNER JOIN inf_tecnica ON inf_tecnica.id_inf_tecnica = atleta.id_infor_tecnica
			INNER JOIN estilo_jujitsu ON estilo_jujitsu.id_estilo = inf_tecnica.id_estilo
			LEFT JOIN academia ON academia.id_academia = inf_tecnica.id_academia_c
			INNER JOIN associacao_provincia ON associacao_provincia.id_associacao_pro = atleta.id_associacao_pro
			WHERE pessoa.n_bilhete like "%'.$binhete.'%"')->result();

			return $query;

		}

		public function getAllMestreByBilheteCampProvincial($id_associacao, $binhete = NULL){

			if($binhete == NULL) return 0;
			// $query = $this->db->query('SELECT * FROM pessoa ps, atleta at, inf_tecnica it, academia ac, estilo_jujitsu est, endereco1 ende WHERE it.id_academia_c = ac.id_academia AND it.id_inf_tecnica = at.id_infor_tecnica AND ac.idestilo = est.id_estilo AND ende.id_endereco = ps.id_endereco_fk1 AND ps.n_bilhete like "%'.$binhete.'%"')->result();
			$query = $this->db->query('SELECT * FROM mestre
			INNER JOIN pessoa ON pessoa.id_pessoa = mestre.id_pessoa
			INNER JOIN endereco1 ON endereco1.id_endereco = pessoa.id_endereco_fk1
			INNER JOIN inf_tecnica ON inf_tecnica.id_inf_tecnica = mestre.id_infor_tecnica
			INNER JOIN estilo_jujitsu ON estilo_jujitsu.id_estilo = inf_tecnica.id_estilo
			LEFT JOIN academia ON academia.id_academia = inf_tecnica.id_academia_c
			INNER JOIN associacao_provincia ON associacao_provincia.id_associacao_pro = mestre.id_associacao_pro
			WHERE pessoa.n_bilhete like "%'.$binhete.'%" and mestre.id_associacao_pro ='.$id_associacao)->result();

			return $query;

		}

		public function getAllMestreByBilheteGraduacao($binhete = NULL){

			if($binhete == NULL) return 0;
			// $query = $this->db->query('SELECT * FROM pessoa ps, atleta at, inf_tecnica it, academia ac, estilo_jujitsu est, endereco1 ende WHERE it.id_academia_c = ac.id_academia AND it.id_inf_tecnica = at.id_infor_tecnica AND ac.idestilo = est.id_estilo AND ende.id_endereco = ps.id_endereco_fk1 AND ps.n_bilhete like "%'.$binhete.'%"')->result();
			$query = $this->db->query('SELECT * FROM mestre
			INNER JOIN pessoa ON pessoa.id_pessoa = mestre.id_pessoa
			INNER JOIN endereco1 ON endereco1.id_endereco = pessoa.id_endereco_fk1
			INNER JOIN inf_tecnica ON inf_tecnica.id_inf_tecnica = mestre.id_infor_tecnica
			INNER JOIN estilo_jujitsu ON estilo_jujitsu.id_estilo = inf_tecnica.id_estilo
			LEFT JOIN academia ON academia.id_academia = inf_tecnica.id_academia_c
			INNER JOIN associacao_provincia ON associacao_provincia.id_associacao_pro = mestre.id_associacao_pro
			WHERE pessoa.n_bilhete like "%'.$binhete.'%"')->result();

			return $query;

		}

		public function getIdMestreInfTecn($id = NULL)
		{
			if($id == NULL) return 0;
			$query = $this->db->query('SELECT * FROM mestre
			INNER JOIN pessoa ON pessoa.id_pessoa = mestre.id_pessoa
			INNER JOIN endereco1 ON endereco1.id_endereco = pessoa.id_endereco_fk1
			INNER JOIN inf_tecnica ON inf_tecnica.id_inf_tecnica = mestre.id_infor_tecnica
			INNER JOIN estilo_jujitsu ON estilo_jujitsu.id_estilo = inf_tecnica.id_estilo
			LEFT JOIN academia ON academia.id_academia = inf_tecnica.id_academia_c
			INNER JOIN associacao_provincia ON associacao_provincia.id_associacao_pro = mestre.id_associacao_pro
			WHERE mestre.id_mestre ='.$id)->result();
		        return $query;
		}

		public function getIdMestreInfTecnBilhete($id = NULL)
		{
			if($id == NULL) return 0;
			$query = $this->db->query('SELECT n_bilhete FROM mestre
			INNER JOIN pessoa ON pessoa.id_pessoa = mestre.id_pessoa
			INNER JOIN endereco1 ON endereco1.id_endereco = pessoa.id_endereco_fk1
			INNER JOIN inf_tecnica ON inf_tecnica.id_inf_tecnica = mestre.id_infor_tecnica
			INNER JOIN estilo_jujitsu ON estilo_jujitsu.id_estilo = inf_tecnica.id_estilo
			LEFT JOIN academia ON academia.id_academia = inf_tecnica.id_academia_c
			INNER JOIN associacao_provincia ON associacao_provincia.id_associacao_pro = mestre.id_associacao_pro
			WHERE mestre.id_mestre ='.$id)->result()[0];
		        return $query->n_bilhete;
		}

		public function getIdMestreInfTecnBilheteMundial($bilhete = null,$id = null){

			if($id == null){
				$query = $this->db->query('SELECT * FROM `participante_mundial`
				inner join campeonato_mundial on campeonato_mundial.id_campeonato_mundial = participante_mundial.id_mundial
				WHERE n_bilhete like "%'.$bilhete.'%"')->result();
			}else{
				$query = $this->db->query('SELECT * FROM `participante_mundial`
				inner join campeonato_mundial on campeonato_mundial.id_campeonato_mundial = participante_mundial.id_mundial
				WHERE n_bilhete in (SELECT n_bilhete FROM mestre
				INNER JOIN pessoa ON pessoa.id_pessoa = mestre.id_pessoa
				INNER JOIN endereco1 ON endereco1.id_endereco = pessoa.id_endereco_fk1
				INNER JOIN inf_tecnica ON inf_tecnica.id_inf_tecnica = mestre.id_infor_tecnica
				INNER JOIN estilo_jujitsu ON estilo_jujitsu.id_estilo = inf_tecnica.id_estilo
				LEFT JOIN academia ON academia.id_academia = inf_tecnica.id_academia_c
				INNER JOIN associacao_provincia ON associacao_provincia.id_associacao_pro = mestre.id_associacao_pro
				WHERE mestre.id_mestre ='.$id.')')->result();
			}

			return $query;
		}

		public function getIdMestreInfTecnBilheteAfricano($bilhete = null, $id = null){

			if($id == null){
				$query = $this->db->query('SELECT * FROM `participante_africano`
				inner join campeonato_africano on campeonato_africano.id_campeonato_africano = participante_africano.id_africano
				WHERE n_bilhete like "%'.$bilhete.'%"')->result();
			}else{
				$query = $this->db->query('SELECT * FROM `participante_africano`
				inner join campeonato_africano on campeonato_africano.id_campeonato_africano = participante_africano.id_africano
				WHERE n_bilhete in (SELECT n_bilhete FROM mestre
				INNER JOIN pessoa ON pessoa.id_pessoa = mestre.id_pessoa
				INNER JOIN endereco1 ON endereco1.id_endereco = pessoa.id_endereco_fk1
				INNER JOIN inf_tecnica ON inf_tecnica.id_inf_tecnica = mestre.id_infor_tecnica
				INNER JOIN estilo_jujitsu ON estilo_jujitsu.id_estilo = inf_tecnica.id_estilo
				LEFT JOIN academia ON academia.id_academia = inf_tecnica.id_academia_c
				INNER JOIN associacao_provincia ON associacao_provincia.id_associacao_pro = mestre.id_associacao_pro
				WHERE mestre.id_mestre ='.$id.')')->result();
			}

			return $query;
		}


		public function getBilheteBYidMestre($id = null){
			$query = $this->db->query('SELECT n_bilhete FROM mestre
			INNER JOIN pessoa ON pessoa.id_pessoa = mestre.id_pessoa
			INNER JOIN endereco1 ON endereco1.id_endereco = pessoa.id_endereco_fk1
			INNER JOIN inf_tecnica ON inf_tecnica.id_inf_tecnica = mestre.id_infor_tecnica
			INNER JOIN estilo_jujitsu ON estilo_jujitsu.id_estilo = inf_tecnica.id_estilo
			LEFT JOIN academia ON academia.id_academia = inf_tecnica.id_academia_c
			INNER JOIN associacao_provincia ON associacao_provincia.id_associacao_pro = mestre.id_associacao_pro
			WHERE mestre.id_mestre ='.$id)->result()[0];

			return $query->n_bilhete;
		}

		public function getIdMestreInfTecnBilheteNacional($bilhete = null){
			$query = $this->db->query('SELECT * FROM `participante_campeonato`
			inner join campeonato_nacional on campeonato_nacional.id_campeonato_nacional = participante_campeonato.id_campeonato_fk
			inner join campeonato on campeonato.id_campeonato = campeonato_nacional.id_campeonato
			inner join local_campeonato on local_campeonato.id_local_campeonato = campeonato.id_local_campeonato
			WHERE bilhete_identidade like "%'.$bilhete.'%"')->result();

			$data = [];

			foreach ($query as $idParticipante) {
				$data["$idParticipante->id_participante_campeonato"] = array(
					'idParticipante' => $idParticipante->id_participante_campeonato,
					'dataHoraInicio' => $idParticipante->dataHoraInicio,
					'cidade_campeonato' => $idParticipante->cidade_campeonato,
					'posicao' => array()
				);

				$classificacaoFinal = $this->db->query('select * from posicaoclassificacao where id_participante ='.$idParticipante->id_participante_campeonato)->result();

				foreach ($classificacaoFinal as $classificacaoFinal) {
					$data["$idParticipante->id_participante_campeonato"]["posicao"]["$classificacaoFinal->posicaoDes"] = array(
						'posicao' => $classificacaoFinal->posicaoDes,
						'id_participante_campeonato' => $classificacaoFinal->id_participante_campeonato,
						'name_participante' => $classificacaoFinal->name_participante
					);
				}
			}

			return $data;
		}

		public function getIdMestreInfTecnBilheteProvincial($bilhete = null){
			$query = $this->db->query('SELECT * FROM `participante_campeonato`
			inner join campeonato on campeonato.id_campeonato = participante_campeonato.id_campeonato_fk
			inner join campeonato_provincial on campeonato_provincial.id_campeonato = campeonato.id_campeonato
			inner join local_campeonato on local_campeonato.id_local_campeonato = campeonato.id_local_campeonato
			WHERE bilhete_identidade like "%'.$bilhete.'%"')->result();

			$data = [];

			foreach ($query as $idParticipante) {
				$data["$idParticipante->id_participante_campeonato"] = array(
					'idParticipante' => $idParticipante->id_participante_campeonato,
					'dataHoraFim' => $idParticipante->dataHoraInicio,
					'cidade_campeonato' => $idParticipante->cidade_campeonato,
					'posicao' => array()
				);

				$classificacaoFinal = $this->db->query('select * from posicaoclassificacao where id_participante ='.$idParticipante->id_participante_campeonato)->result();

				foreach ($classificacaoFinal as $classificacaoFinal) {
					$data["$idParticipante->id_participante_campeonato"]["$classificacaoFinal->posicaoDes"] = array(
						'posicao' => $classificacaoFinal->posicaoDes,
						'id_participante_campeonato' => $classificacaoFinal->id_participante
					);
				}
			}

			return $data;
		}

		public function gettCategoria()
		{
			$returno = $this->db->query('select * from categoria_arbitro')->result();
			return $returno;
		}

		public function gettsubCategoria()
		{
			$returno = $this->db->query('select * from sub_categoria_arbitro')->result();
			return $returno;
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

		public function AtualizarEndereco($id = NULL,$dados = NULL){

			if ($id == NULL) return 0;
				$this->db->where('id_endereco',$id);
			if ($this->db->update('endereco1',$dados)) {
				return 1;
			}else{
				return 2;
			}

			// var_dump($dados);

		}

		public function AtualizarTecnica($id = NULL,$dados = NULL){
			if ($id == NULL) return 0;
				$this->db->where('id_inf_tecnica',$id);
			if ($this->db->update('inf_tecnica',$dados)) {
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

		public function AtualizarMestre($id = NULL,$dados = NULL){
			if ($id == NULL) return 0;
				$this->db->where('id_mestre',$id);
			if ($this->db->update('mestre',$dados)) {
				return 1;
			}else{
				return 2;
			}
		}

		public function excluirMestre($id = NULL){

		if($id != NULL){
			$this->db->where('id_mestre', $id);
			if($this->db->delete('mestre')):
				return 1;
			else:
				return 2;
			endif;
		}else{
			return 0;
		}
	}

	public function verificarActividade($id = null){
		$query = $this->db->query('SELECT n_bilhete FROM mestre
		INNER JOIN pessoa ON pessoa.id_pessoa = mestre.id_pessoa
		WHERE id_mestre ='.$id)->result()[0];

		if(empty($query)){
             return false;
		}else{
			$query2 = $this->db->query('SELECT * FROM  participante_actividade
			INNER JOIN graduacaofederacao ON graduacaofederacao.id_graduacaofederacao = participante_actividade.id_graduacaoFk
      INNER JOIN local_campeonato ON local_campeonato.id_local_campeonato = graduacaofederacao.cidadePais
			WHERE bilhete_identidade like "'.$query->n_bilhete.'%"')->result();
			return $query2;
		}
	}

	public function verificarPosicao($id= null){

		$query = $this->db->query('SELECT id_treinador FROM treinador WHERE id_mestre='.$id)->result();

		if($query != null){
			$dados = [
				"treinador" => "treinador",
				"id_treinador" => $query[0]->id_treinador
			];

			return $dados;
		}

		return null;

	}

	public function verificarPosicao2($id= null){

		$query = $this->db->query('SELECT * FROM treinador WHERE id_mestre='.$id)->result();

		if(count($query) != 0){

			return $query;

		}

	}

	}

?>

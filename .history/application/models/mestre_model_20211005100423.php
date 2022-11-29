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

		public function getAllMestre()
		{
			$query = $this->db->query('SELECT * FROM mestre
			INNER JOIN pessoa ON pessoa.id_pessoa = mestre.id_pessoa
			INNER JOIN endereco1 ON endereco1.id_endereco = pessoa.id_endereco_fk1
			INNER JOIN inf_tecnica ON inf_tecnica.id_inf_tecnica = mestre.id_infor_tecnica
			LEFT JOIN academia ON academia.id_academia = inf_tecnica.id_academia_c
			INNER JOIN estilo_jujitsu ON estilo_jujitsu.id_estilo = inf_tecnica.id_estilo
			INNER JOIN associacao_provincia ON associacao_provincia.id_associacao_pro = mestre.id_associacao_pro')->result();
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
			INNER JOIN associacao_provincia ON associacao_provincia.id_associacao_pro = mestre.id_associacao_pro where mestre.id_associacao_pro='.$id
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

		public function getAllMestreByBilhete($binhete = NULL){

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

			if($q){

			}
            
			return $query;
			
		}
		
		public function getAllMestreByBilheteAtleta($binhete = NULL){

			if($binhete == NULL) return 0;
			// $query = $this->db->query('SELECT * FROM pessoa ps, atleta at, inf_tecnica it, academia ac, estilo_jujitsu est, endereco1 ende WHERE it.id_academia_c = ac.id_academia AND it.id_inf_tecnica = at.id_infor_tecnica AND ac.idestilo = est.id_estilo AND ende.id_endereco = ps.id_endereco_fk1 AND ps.n_bilhete like "%'.$binhete.'%"')->result();
			$query = $this->db->query('SELECT * FROM atleta
			INNER JOIN pessoa ON pessoa.id_pessoa = atleta.id_pessoa
			INNER JOIN endereco1 ON endereco1.id_endereco = pessoa.id_endereco_fk1
			INNER JOIN inf_tecnica ON inf_tecnica.id_inf_tecnica = atleta.id_infor_tecnica
			INNER JOIN estilo_jujitsu ON estilo_jujitsu.id_estilo = inf_tecnica.id_estilo
			LEFT JOIN academia ON academia.id_academia = inf_tecnica.id_academia_c
			INNER JOIN associacao_provincia ON associacao_provincia.id_associacao_pro = atleta.id_associacao_pro
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
			INNER JOIN actividade2 ON actividade2.id_actividade = participante_actividade.id_actividade  
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


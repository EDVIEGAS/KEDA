<?php

	class Arbitro_Model extends CI_Model
	{

		public function getCategoria()
		{
			$result = $this->db->query('select * from categoria_arbitro')->result();
			return $result;
		}

		public function getSubCategoria()
		{
			$result = $this->db->query('select * from subcategoria_arbitro')->result();
			return $result;
		}

		public function addArbitro($dados = null)
		{
			if($dados == NULL) return 0;

			if($this->db->insert('arbitro', $dados))
			{
				return 1;
			}else{
				return 2;
			}
        }

        public function addPessoa($dados = null)
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

		public function getAllArbitro()
		{
			$query = $this->db->query('SELECT ar.*, it.*, subCat.*, ende.*, pe.*
			FROM pessoa pe, arbitro ar, inf_tecnica it, categoria_arbitro_subcategoria_arbitro subCat,endereco1 ende
			WHERE it.id_inf_tecnica = ar.id_infor_tecnica
			AND it.id_catArbitro_subcatArbitro = subCat.id_categoria_arbitro_subcategoria_arbitro
			AND ende.id_endereco = pe.id_endereco_fk1
			AND pe.id_pessoa = ar.id_pessoa')->result();
		        return $query;
		}

		public function getAllArbitroInternacionalMas()
		{
			$query = $this->db->query('SELECT ar.*, it.*, subCat.*, ende.*, pe.*, count(*) as quantidade
			FROM pessoa pe, arbitro ar, inf_tecnica it, categoria_arbitro_subcategoria_arbitro subCat,endereco1 ende
			WHERE it.id_inf_tecnica = ar.id_infor_tecnica
			AND it.id_catArbitro_subcatArbitro = subCat.id_categoria_arbitro_subcategoria_arbitro
			AND ende.id_endereco = pe.id_endereco_fk1
			AND pe.id_pessoa = ar.id_pessoa AND subCat.nome_categoria_fk = "Internacional" AND pe.genero="Masculino"')->result();
		        return $query;
		}

		public function getAllArbitroInternacionalFem()
		{
			$query = $this->db->query('SELECT ar.*, it.*, subCat.*, ende.*, pe.*, count(*) as quantidade
			FROM pessoa pe, arbitro ar, inf_tecnica it, categoria_arbitro_subcategoria_arbitro subCat,endereco1 ende
			WHERE it.id_inf_tecnica = ar.id_infor_tecnica
			AND it.id_catArbitro_subcatArbitro = subCat.id_categoria_arbitro_subcategoria_arbitro
			AND ende.id_endereco = pe.id_endereco_fk1
			AND pe.id_pessoa = ar.id_pessoa AND subCat.nome_categoria_fk = "Internacional" AND pe.genero="Femenino"')->result();
		        return $query;
		}

		public function getAllArbitroNacionalMasc()
		{
			$query = $this->db->query('SELECT ar.*, it.*, subCat.*, ende.*, pe.*, count(*) as quantidade
			FROM pessoa pe, arbitro ar, inf_tecnica it, categoria_arbitro_subcategoria_arbitro subCat,endereco1 ende
			WHERE it.id_inf_tecnica = ar.id_infor_tecnica
			AND it.id_catArbitro_subcatArbitro = subCat.id_categoria_arbitro_subcategoria_arbitro
			AND ende.id_endereco = pe.id_endereco_fk1
			AND pe.id_pessoa = ar.id_pessoa AND subCat.nome_categoria_fk = "Nacional" AND pe.genero="Masculino"')->result();
		        return $query;
		}

		public function getAllArbitroNacionalFem()
		{
			$query = $this->db->query('SELECT ar.*, it.*, subCat.*, ende.*, pe.*, count(*) as quantidade
			FROM pessoa pe, arbitro ar, inf_tecnica it, categoria_arbitro_subcategoria_arbitro subCat,endereco1 ende
			WHERE it.id_inf_tecnica = ar.id_infor_tecnica
			AND it.id_catArbitro_subcatArbitro = subCat.id_categoria_arbitro_subcategoria_arbitro
			AND ende.id_endereco = pe.id_endereco_fk1
			AND pe.id_pessoa = ar.id_pessoa AND subCat.nome_categoria_fk = "Nacional" AND pe.genero="Femenino"')->result();
		        return $query;
		}

		public function getAllArbitroProvincialMasc()
		{
			$query = $this->db->query('SELECT ar.*, it.*, subCat.*, ende.*, pe.*, count(*) as quantidade
			FROM pessoa pe, arbitro ar, inf_tecnica it, categoria_arbitro_subcategoria_arbitro subCat,endereco1 ende
			WHERE it.id_inf_tecnica = ar.id_infor_tecnica
			AND it.id_catArbitro_subcatArbitro = subCat.id_categoria_arbitro_subcategoria_arbitro
			AND ende.id_endereco = pe.id_endereco_fk1
			AND pe.id_pessoa = ar.id_pessoa AND subCat.nome_categoria_fk = "Provincial" AND pe.genero="Masculino"')->result();
		        return $query;
		}

		public function getAllArbitroProvincialFem()
		{
			$query = $this->db->query('SELECT ar.*, it.*, subCat.*, ende.*, pe.*, count(*) as quantidade
			FROM pessoa pe, arbitro ar, inf_tecnica it, categoria_arbitro_subcategoria_arbitro subCat,endereco1 ende
			WHERE it.id_inf_tecnica = ar.id_infor_tecnica
			AND it.id_catArbitro_subcatArbitro = subCat.id_categoria_arbitro_subcategoria_arbitro
			AND ende.id_endereco = pe.id_endereco_fk1
			AND pe.id_pessoa = ar.id_pessoa AND subCat.nome_categoria_fk = "Provincial" AND pe.genero="Femenino"')->result();
		        return $query;
		}

		public function getAllArbitroEstatistica()
		{
			$query = $this->db->query('SELECT ar.*, it.*, subCat.*, ende.*, pe.*
			FROM pessoa pe, arbitro ar, inf_tecnica it, categoria_arbitro_subcategoria_arbitro subCat,endereco1 ende
			WHERE it.id_inf_tecnica = ar.id_infor_tecnica
			AND it.id_catArbitro_subcatArbitro = subCat.id_categoria_arbitro_subcategoria_arbitro
			AND pe.id_pessoa = ar.id_pessoa')->result();
		        return $query;
		}

		function listar_arbitro_id($id = null)
		{
			$resultado = $this->db->query('SELECT * FROM arbitro
			INNER JOIN pessoa ON pessoa.id_pessoa = arbitro.id_pessoa
			INNER JOIN endereco1 ON endereco1.id_endereco = pessoa.id_endereco_fk1
			INNER JOIN inf_tecnica ON inf_tecnica.id_inf_tecnica = arbitro.id_infor_tecnica
			-- LEFT JOIN academia ON academia.id_academia = inf_tecnica.id_academia_c
			-- INNER JOIN estilo_jujitsu ON estilo_jujitsu.id_estilo = inf_tecnica.id_estilo
			INNER JOIN categoria_arbitro_subcategoria_arbitro ON inf_tecnica.id_catArbitro_subcatArbitro = categoria_arbitro_subcategoria_arbitro.id_categoria_arbitro_subcategoria_arbitro
			LEFT JOIN associacao_provincia ON associacao_provincia.id_associacao_pro = arbitro.id_associacao_pro'
			)->result();
			return $resultado;

		}

		function listar_arbitroCategoria($categoria = null)
		{
			$resultado = $this->db->query("SELECT * FROM arbitro
			INNER JOIN pessoa ON pessoa.id_pessoa = arbitro.id_pessoa
			INNER JOIN endereco1 ON endereco1.id_endereco = pessoa.id_endereco_fk1
			INNER JOIN inf_tecnica ON inf_tecnica.id_inf_tecnica = arbitro.id_infor_tecnica
			-- LEFT JOIN academia ON academia.id_academia = inf_tecnica.id_academia_c
			-- INNER JOIN estilo_jujitsu ON estilo_jujitsu.id_estilo = inf_tecnica.id_estilo
			INNER JOIN categoria_arbitro_subcategoria_arbitro ON inf_tecnica.id_catArbitro_subcatArbitro = categoria_arbitro_subcategoria_arbitro.id_categoria_arbitro_subcategoria_arbitro
			LEFT JOIN associacao_provincia ON associacao_provincia.id_associacao_pro = arbitro.id_associacao_pro
            where categoria_arbitro_subcategoria_arbitro.nome_categoria_fk ='$categoria'")->result();

			return $resultado;

		}

		function getArbitro_id($id = null, $id_associacao_pro = null)
		{
			$resultado = $this->db->query('SELECT * FROM arbitro
			INNER JOIN pessoa ON pessoa.id_pessoa = arbitro.id_pessoa
			INNER JOIN endereco1 ON endereco1.id_endereco = pessoa.id_endereco_fk1
			INNER JOIN inf_tecnica ON inf_tecnica.id_inf_tecnica = arbitro.id_infor_tecnica
			INNER JOIN categoria_arbitro_subcategoria_arbitro ON inf_tecnica.id_catArbitro_subcatArbitro = categoria_arbitro_subcategoria_arbitro.id_categoria_arbitro_subcategoria_arbitro
			LEFT JOIN associacao_provincia ON associacao_provincia.id_associacao_pro = arbitro.id_associacao_pro WHERE id_arbitro='.$id
			)->result();
			return $resultado;

		}

		function getTreinador_id($id = null, $id_associacao_pro = null)
		{
			$resultado = $this->db->query('SELECT * FROM mestre
			INNER JOIN pessoa ON pessoa.id_pessoa = mestre.id_pessoa
			INNER JOIN treinador ON mestre.id_mestre = treinador.id_mestre
			INNER JOIN endereco1 ON endereco1.id_endereco = pessoa.id_endereco_fk1
			INNER JOIN inf_tecnica ON inf_tecnica.id_inf_tecnica = mestre.id_infor_tecnica
			inner JOIN associacao_provincia ON associacao_provincia.id_associacao_pro = mestre.id_associacao_pro WHERE treinador.id_treinador='.$id
			)->result();
			return $resultado;

		}

		public function trocarEstado($id = NULL, $dado = null)
		{
	    	if ($id == NULL) return 0;
				$this->db->where('id_arbitro',$id);
			if ($this->db->update('arbitro',$dado)) {
				return 1;
			}else{
				return 2;
			}
		}

		public function getIdArbitroInfTecn($id = NULL)
		{
			if($id == NULL) return 0;
			// $query = $this->db->query('SELECT ar.*, it.*, subCat.*, ende.*, pe.* FROM pessoa pe, arbitro ar, inf_tecnica it, categoria_arbitro_subcategoria_arbitro subCat,endereco1 ende WHERE it.id_inf_tecnica = ar.id_infor_tecnica AND it.id_catArbitro_subcatArbitro = subCat.id_categoria_arbitro_subcategoria_arbitro AND ende.id_endereco = pe.id_endereco_fk1 AND pe.id_pessoa = ar.id_pessoa AND ar.id_arbitro='.$id)->result();
			// return $query;
			$query = $this->db->query('SELECT * FROM arbitro
			INNER JOIN pessoa ON pessoa.id_pessoa = arbitro.id_pessoa
			INNER JOIN endereco1 ON endereco1.id_endereco = pessoa.id_endereco_fk1
			INNER JOIN inf_tecnica ON inf_tecnica.id_inf_tecnica = arbitro.id_infor_tecnica
			LEFT JOIN associacao_provincia ON associacao_provincia.id_associacao_pro = arbitro.id_associacao_pro
			INNER JOIN categoria_arbitro_subcategoria_arbitro ON inf_tecnica.id_catArbitro_subcatArbitro = categoria_arbitro_subcategoria_arbitro.id_categoria_arbitro_subcategoria_arbitro
			WHERE arbitro.id_arbitro ='.$id)->result();
		    return $query;
		}

		public function gettCategoria()
		{
			$returno = $this->db->query('select * from categoria_arbitro')->result();
			return $returno;
		}

		public function gettsubCategoria()
		{
			$returno = $this->db->query('select * from subcategoria_arbitro')->result();
			return $returno;
		}

		public function AtualizarArbito($id = NULL,$dados = NULL){
			if ($id == NULL) return 0;
				$this->db->where('id_arbitro',$id);
			if ($this->db->update('arbitro',$dados)) {
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
		}

		public function ActualizarTecnica($id = NULL,$dados = NULL){
			if ($id == NULL) return 0;
				$this->db->where('id_categoria_arbitro_subcategoria_arbitro',$id);
			if ($this->db->update('categoria_arbitro_subcategoria_arbitro',$dados)) {
				return 1;
			}else{
				return 2;
			}
		}

		public function getIdcatArbitrosubcatArbitro($id = NULL){
			$returno = $this->db->query('select id_catArbitro_subcatArbitro from inf_tecnica where id_inf_tecnica ='.$id)->result();
			return $returno[0]->id_catArbitro_subcatArbitro;
		}

		public function excluirArbitro($id = NULL){

			if($id != NULL){
				$this->db->where('id_arbitro', $id);
				if($this->db->delete('arbitro')):
					return 1;
				else:
					return 2;
				endif;
			}else{
				return 0;
			}
		}

		public function getAll()
		{
			return $this->db->order_by('descricao_cat_arb')->get('categoria_arbitro');
		}


		function selectCategoria()
		{
			$options = "<option value='{0}'>Selecione a Categoria</option>";
			$categoria = $this->getAll();

			foreach ($categoria->result() as $categoria) {
				$options .= "<option value = '{$categoria->id_categoria_arbitro}'>{$categoria->descricao_cat_arb}</option>";
			}
			return $options;
		}

		// function dadosInfoArbtro(){
		//
		// }

	}
?>

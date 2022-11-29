<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class campeonato_model extends CI_Model
{
	
	public function setCampeonatoCorrente($id = null, $dados = null){
		$this->db->where('cod', $id);
		$this->db->update('campeonato_corrente', $dados);
	}
	
    public function getAtletaProvincia($provincia){
		$query = $this->db->query('select * from atleta as atl 
		inner join pessoa ps on atl.id_pessoa = ps.id_pessoa
		inner join endereco1 ed on ps.id_endereco_fk1 = ed.id_endereco
		inner join inf_tecnica inf on inf.id_inf_tecnica = atl.id_infor_tecnica
		inner join academia acad on acad.id_academia = inf.id_academia_c 
		and ed.provincia ='.$provincia)->result();
		return $query;
	}

	public function setLocal_campeonato($dado1 = null)
	{
		if($dado1 == NULL) return 0;
		if($this->db->insert('local_campeonato', $dado1))
		{  
			$ultimo_id = $this->db->insert_id();
			return $ultimo_id;
		}
		return 2;
	}

	public function excluirCategoria($id = NULL){

		if($id != NULL){
			$this->db->where('id_categoriaCampeonato', $id);
			if($this->db->delete('categoria_campeonato')):
				return 1;
			else:
				return 2;
			endif;
		}else{
			return 0;
		}
	}

	public function excluirParticipanteCampeonato($id = NULL){

		if($id != NULL){
			$this->db->where('id_participante_campeonato', $id);
			if($this->db->delete('participante_campeonato')):
				return 1;
			else:
				return 2;
			endif;
		}else{
			return 0;
		}
	}

	public function atualizarParticipanteCampeonato($id = NULL, $dados = null)
	{

	    	if ($id == NULL) return 0;
				$this->db->where('id_participante_campeonato',$id);
			if ($this->db->update('participante_campeonato',$dados)) {
				return 1;
			}else{
				return 2;
			}
	}
     
    public function setCampeonato($dados = null)
	{
		if($dados == NULL) return 0;
		if($this->db->insert('campeonato', $dados))
		{  
			$ultimo_id = $this->db->insert_id();
			return $ultimo_id;;
		}
		return 2;
	}

	public function setCampeonato_nacional($dados = null)
	{
		if($dados == NULL) return 0;
		if($this->db->insert('campeonato_nacional', $dados))
		{  
			$ultimo_id = $this->db->insert_id();
			return $ultimo_id;;
		}
		return 2;
	}

	public function setCampeonato_provincial($dados = null)
	{
		if($dados == NULL) return 0;
		if($this->db->insert('campeonato_provincial', $dados))
		{  
			$ultimo_id = $this->db->insert_id();
			return $ultimo_id;;
		}
		return 2;
	}

	public function updateStatusCampeonato_provincial($id = null, $dados = null){
		$this->db->where('id_actividade', $id);
		$this->db->update('actividade2', $dados);
	}

	public function setCampeonato_africano($dados = null)
	{
		if($dados == NULL) return 0;
		if($this->db->insert('campeonato_africano', $dados))
		{  
			$ultimo_id = $this->db->insert_id();
			return $ultimo_id;;
		}
		return 2;
	}

	public function setCampeonato_mundial($dados = null)
	{
		if($dados == NULL) return 0;
		if($this->db->insert('campeonato_mundial', $dados))
		{  
			$ultimo_id = $this->db->insert_id();
			return $ultimo_id;
		}
		return 2;
	}

	public function getAllCampeonatoNacional()
	{
		$campeonatos = $this->db->query('select * from campeonato as ca inner join campeonato_provincial cap on ca.id_campeonato = cap.id_campeonato inner join local_campeonato lca on lca.id_local_campeonato = ca.id_local_campeonato')->result();
		return $campeonatos;
	}

	public function getIdCampeonato($id = null,$nome = null)
	{   
		if($nome == 'Nacional'){
			$campeonatos = $this->db->query('select * from campeonato as ca inner join campeonato_nacional cap on ca.id_campeonato = cap.id_campeonato inner join local_campeonato lca on lca.id_local_campeonato = ca.id_local_campeonato and cap.id_campeonato_nacional ='.$id)->result();
			return $campeonatos;
		}elseif($nome == 'Mundial'){
			$campeonatos = $this->db->query('select * from campeonato as ca inner join campeonato_mundial cap on ca.id_campeonato = cap.id_campeonato inner join local_campeonato lca on lca.id_local_campeonato = ca.id_local_campeonato and cap.id_campeonato_mundial ='.$id)->result();
			return $campeonatos;
		}elseif($nome == 'Provincial' || $nome == 'provincial'){
			$campeonatos = $this->db->query('select * from campeonato as ca inner join campeonato_provincial cap on ca.id_campeonato = cap.id_campeonato inner join local_campeonato lca on lca.id_local_campeonato = ca.id_local_campeonato and cap.id_campeonato_provincial ='.$id)->result();
			return $campeonatos;
		}elseif($nome == 'Africano'){
			$campeonatos = $this->db->query('select * from campeonato as ca inner join campeonato_africano cap on ca.id_campeonato = cap.id_campeonato inner join local_campeonato lca on lca.id_local_campeonato = ca.id_local_campeonato and cap.id_campeonato_africano ='.$id)->result();
			return $campeonatos;
		}
		
	}

	public function getCategoria()
	{
		$categorias = $this->db->query("SELECT * FROM categoria")->result();
		return $categorias;
	}

	public function setAllcategoria($id = null)
	{
		$campeonatos = $this->db->query('SELECT * FROM categoria_campeonato 
		INNER JOIN campeonato ON campeonato.id_campeonato = categoria_campeonato.id_campeonato_fk
		INNER JOIN categoria ON categoria.id_categoria = categoria_campeonato.id_categoria_fk
		WHERE campeonato.id_campeonato ='.$id)->result();
		return $campeonatos;
	}

	public function setIdcategoria($id = null, $genero = null)
	{
		$campeonatos = $this->db->query('SELECT * FROM categoria_campeonato 
		INNER JOIN campeonato ON campeonato.id_campeonato = categoria_campeonato.id_campeonato_fk
		INNER JOIN categoria ON categoria.id_categoria = categoria_campeonato.id_categoria_fk
		WHERE campeonato.id_campeonato ='.$id.' and generoCategoriaCamp like "%'.$genero.'%"')->result();
		
		return $campeonatos;
	}

	public function setIdcategoria3($id = null, $genero = null,$escalao = null)
	{
		$categoriaPeso = $this->db->query('SELECT * FROM campeonato_categoriapeso
		WHERE id_campeonatoescalao in (select id_campeonato_escalaoetario from campeonato_escalaoetario where id_campeonato='.$id.' and descricao_escalao="'.$escalao.'" and genero="'.$genero.'")')->result();

		return $categoriaPeso;
	}

	public function setAllParticipante($id, $id2){

		$participantes = $this->db->query('SELECT * FROM participante_campeonato 
		INNER JOIN campeonato ON campeonato.id_campeonato = participante_campeonato.id_campeonato_fk
		WHERE id_campeonato_fk in (select id_campeonato from campeonato where id_associacao="'.$id2.'" and fk_actividadeC="'.$id.'")')->result();

		return $participantes;
	}

	public function setAllParticipante2($id_actividade, $idcampeonato){

	 	if($idcampeonato != 0){
			$query = $this->db->query('select id_campeonato from campeonato where fk_actividadeC='.$id_actividade)->result()[0];
			$idcampeonato = $query->id_campeonato;
		
			$query = $this->db->query('SELECT DISTINCT(escalao) FROM participante_campeonato WHERE id_campeonato_fk='.$idcampeonato.' and escalao != "NULL"')->result();

			$data = array();

			foreach($query as $escalao2){

				$data["$escalao2->escalao"]=array(
					"escalao" => $escalao2->escalao,
					"generos" => array()
				);

				$generos = $this->db->query('SELECT DISTINCT(genero) FROM participante_campeonato WHERE escalao like "%'.$escalao2->escalao.'%"')->result();

				foreach($generos as $genero){

					$data["$escalao2->escalao"]['generos']["$genero->genero"] = array(
						"genero" => $genero->genero,
						"categoriaPesos" => array()
					);

					$categoriaPesos = $this->db->query('SELECT DISTINCT(categoriaPeso) FROM `participante_campeonato` WHERE categoriaPeso != "NULL" and genero like "%'.$genero->genero.'%"')->result();

					foreach($categoriaPesos as $categoriaPeso){

						$data["$escalao2->escalao"]['generos']["$genero->genero"]["categoriaPesos"]["$categoriaPeso->categoriaPeso"] = array(
							"categoriaPeso" => $categoriaPeso->categoriaPeso,
							"participantes" => array()
						);


						$participantes = $this->db->query('SELECT * FROM participante_campeonato WHERE id_campeonato_fk='.$idcampeonato.' and escalao like "%'.$escalao2->escalao.'%" and categoriaPeso like "%'.$categoriaPeso->categoriaPeso.'%"')->result();

						foreach($participantes as $participante){
							$data["$escalao2->escalao"]['generos']["$genero->genero"]['categoriaPesos']["$categoriaPeso->categoriaPeso"]['participantes']["$participante->id_participante_campeonato"] = array(
								"nome_participante" => $participante->nome_participante,
								"categoria" => $participante->categoria,
								"funcao" => $participante->funcao,
								"dataNascimento" => $participante->dataNascimento
							);
						}
					}


				}

			}

			return $data;

		}
	}

	public function setCategoria($dado = null){
		if($this->db->insert('categoria_campeonato', $dado)){
			return 1;
		}else{
			return 2;
		}
	}

	public function setParticipante($dado = null)
	{ 
		if($this->db->insert('participantes',$dado)){
			return 1;
		}else{
			return 2;
		}
	}

	public function setParticipanteCampeonato($dado = null)
	{ 
		if($this->db->insert('participante_campeonato',$dado)){
			return 1;
		}else{
			return 2;
		}
	}

	public function verificaParticipanteCampeonato($bilhete = null, $idcampeonato)
	{ 
		$query = $this->db->query('SELECT * FROM participante_campeonato WHERE id_campeonato_fk='.$idcampeonato.' and bilhete_identidade like "%'.$bilhete.'%"')->result();

		return $query;
		
	}

	public function getIdCampeonatoCorrente($id = null, $id_provincia = null){
    
		$query = $this->db->query('SELECT * FROM campeonato WHERE id_associacao='.$id_provincia.' AND fk_actividadeC='.$id)->result();
		if(empty($query)){
		  echo 'erro';
		}else{
		  $query2 = $query[0]->id_campeonato;
		  echo $query2;
	
		}
	   
	}

    public function Participantes1($dado = null)
	{ 
		$this->db->insert('participante_campeonato',$dado);
	}

	public function Participa($dado = null){
		$this->db->insert('participante_campeonato',$dado);
	}

	public function setFuncao($dados = null)
	{
		if($dados == NULL) return 0;
		if($this->db->insert('funcaocampeonato', $dados))
		{  
			return 1;
		}else{
			return 3;
		}
		return 2;
	}

	public function getAllFuncao(){
		$query = $this->db->query('select * from funcaocampeonato')->result();
		return $query;
	}

	public function getFuncaoCampeonato()
	{
		$query = $this->db->query('select * from funcaocampeonato')->result();
		return $query;
	}

	public function getAllParticipantes()
	{
        $query = $this->db->query('select * from pessoa ps, atleta at, campeonato ca, participante_campeonato pc, inf_tecnica inf, endereco1 end where ps.id_pessoa = at.id_pessoa AND ps.id_pessoa = pc.id_participante_ca AND inf.id_inf_tecnica=at.id_infor_tecnica AND end.id_endereco=ps.id_endereco_fk1 AND ca.id_campeonato = pc.id_campeonato')->result();

        return $query;
	}

	public function getAllProvincia(){
		$query = $this->db->query('SELECT * FROM provincia')->result();
		return $query;
	}
	
	function listar_atleta_id($id = null)
	{
		$resultado = $this->db->query('select * from pessoa as ps inner join atleta on ps.id_pessoa = atleta.id_pessoa inner join endereco1 on ps.id_endereco_fk1 = endereco1.id_endereco inner join inf_tecnica on inf_tecnica.id_inf_tecnica = atleta.id_infor_tecnica inner join academia on academia.id_academia = inf_tecnica.id_academia_c and atleta.id_associacao_pro='.$id)->result();
		return $resultado; 
	}

	function getEscalao(){
		$query = $this->db->query('SELECT * FROM escalao')->result();
		return $query;
	}

	function getCategoriaIdade(){
		$query = $this->db->query('SELECT * FROM categoriaidade')->result();
		return $query;
	}

	function getSistemaLuta(){
		$query = $this->db->query('SELECT * FROM sistemaluta')->result();
		return $query;
	}

	function setcategoriaPesoModel($peso = null){
		if($this->db->insert('categoriaidade',$peso)){
			return 1;
		}else{
			return 2;
		}
	}

	function getcampeonato($id = null, $evento = null){

		if($evento == "Seminario"){
			$query = $this->db->query('select * from graduacaofederacao where id_actividade='.$id)->result();
			return $query;
		}else{
			$query = $this->db->query('select * from campeonato where fk_actividadeC='.$id)->result();
		return $query;
		}
		
	}

	function getInfoCabecalhoLista($id, $data){
      if($data != 0){
		$query = $this->db->query('select data_fim,data_inicio,director_prova,cidade_campeonato from campeonato
			inner join actividade2 on actividade2.id_actividade = campeonato.fk_actividadeC
			inner join local_campeonato on local_campeonato.id_local_campeonato = campeonato.id_local_campeonato
			inner join campeonato_provincial on campeonato_provincial.id_campeonato = campeonato.id_campeonato
			where campeonato.id_campeonato ='.$id)->result();
	  }else{
		$query = $this->db->query('select data_fim,data_inicio,director_prova,cidade_campeonato from campeonato
			inner join actividade2 on actividade2.id_actividade = campeonato.fk_actividadeC
			inner join local_campeonato on local_campeonato.id_local_campeonato = campeonato.id_local_campeonato
			inner join campeonato_nacional on campeonato_nacional.id_campeonato = campeonato.id_campeonato
			where campeonato.id_campeonato ='.$id)->result();  
	  }
		return $query;
	}

	function getInfoRelatorioFinal45($id){
    
		$query = $this->db->query('select * from campeonato
			inner join actividade2 on actividade2.id_actividade = campeonato.fk_actividadeC
			inner join local_campeonato on local_campeonato.id_local_campeonato = campeonato.id_local_campeonato
			inner join campeonato_nacional on campeonato_nacional.id_campeonato = campeonato.id_campeonato
			where campeonato.id_campeonato ='.$id)->result();
	  
		return $query;

	}
	
	function getInfoRelatorioFinal45we($id){
    
		$query = $this->db->query('select count(*) as Total_participante from participante_campeonato where id_campeonato_fk='.$id)->result()[0];
	  
		return $query->Total_participante;

	}

	function pegarSecretarioGeral(){
    
		$query = $this->db->query('select nome from menbro_orgao 
		where nome_cargo_membro="Secretario geral" and id_mandato_fk in (select id_mandato_atual from mandato_atual)')->result()[0];
	  
		return $query->nome;

	}

	function getCampeonatoProvinParti3($id){
    
		$query = $this->db->query('select DISTINCT(provincia) from participante_campeonato where id_campeonato_fk ='.$id)->result();
	  
		return $query;

	}

	function getcampeonato2($id = null, $evento = null, $idcampeonato = null){

		if($evento == "Seminario"){
			$query = $this->db->query('select * from graduacaofederacao where id_actividade='.$id)->result();
			return $query;
		}else{
			if($idcampeonato != 0){
				$query = $this->db->query('select id_campeonato from campeonato where fk_actividadeC='.$id)->result()[0];
				return $query->id_campeonato;
			}
		}
		
	}

	function setcampeonatoEscalao($dado = null){
		if($this->db->insert('campeonato_escalaoetario',$dado)){
			$ultimo_id = $this->db->insert_id();
			return $ultimo_id;
		}else{
			return 2;
		}
	}

	function verificacampeonatoEscalao($dado1, $dado2, $dado3){
		$query = $this->db->query('select * from campeonato_escalaoetario where id_campeonato='.$dado1.' and descricaosistemaluta="'.$dado2.'" and genero="'.$dado3.'"')->result()[0];
		return $query;
	}

	function setcampeonatoPeso($dado = null){
		if($this->db->insert('campeonato_categoriapeso',$dado)){
			return 1;
		}else{
			return 2;
		}
	}

	function setcampeonatoIdade($dado = null){
		if($this->db->insert('categoriaidade_campeonato',$dado)){
			return 1;
		}else{
			return 2;
		}
	}

	function setcampeonatoSistemaLuta($dado = null){
		if($this->db->insert('campeonato_sistemadeluta',$dado)){
			return 1;
		}else{
			return 2;
		}
	}

	function verificarCampeonatoSistemaLuta($dado1, $dado2){
		$query = $this->db->query('select * from campeonato_sistemadeluta where id_campeonato='.$dado1.' and descricaosistemaluta="'.$dado2.'"')->result();
		return $query;
	}

	function setcampeonatoClassificacao($dado = null){
		if($this->db->insert('classificacao_campeonato',$dado)){
			$ultimo_id = $this->db->insert_id();
			return $ultimo_id;
		}else{
			return 2;
		}
	}

	function posicaoclassificacao($dado = null){
		if($this->db->insert('posicaoclassificacao',$dado)){
			return 1;
		}else{
			return 2;
		}
	}

	function getgenero(){
		$query = $this->db->query('select * from genero')->result();
		return $query;
	}

	function getcategoriaPeso($id_escalaoGenero2 = null){

				$categoriaPesos = $this->db->query('SELECT * FROM categoriapeso WHERE id_escalaoGenero ='.$id_escalaoGenero2)->result();
				return $categoriaPesos;

	}

	function getcategoriaPesoSemEscalao(){

				$categoriaPesos = $this->db->query('SELECT distinct(descricao_peso) FROM categoriapeso')->result();
				return $categoriaPesos;

	}

	function getEscalaoCampeonato($id){

		$query = $this->db->query('select DISTINCT(descricao_escalao) from campeonato_escalaoetario
		where id_campeonato ='.$id)->result();

		return $query;
	}

	function verificaEXIST($id){

		$query = $this->db->query('select DISTINCT(id_categoriapeso) from classificacao_campeonato
		where id_categoriapeso ='.$id)->result();

		if($query){
			return 1;
		}else{
			return 2;
		}
	}

	function getClassificacaoMedalhaProvincia($idcampeonato = null){

		if($idcampeonato != 0){
			$query = $this->db->query('select DISTINCT(provincia) from participante_campeonato where id_campeonato_fk ='.$idcampeonato)->result()[0];
			$provincias = $query->provincia;

			$data = array();
		
			foreach($query as $escalao){

			$query = $this->db->query('')->result();

				$data["$provincias->provincia"] = array(
					'provincia' => $provincias->provincia,
					'generos' => array()
				);

				$provincia12 = $this->db->query('select nome_participante,id_participante_campeonato from participante_campeonato
				where provincia = '.$provincias->provincia.' and id_campeonato_fk ='.$idcampeonato)->result();

				// $generos = $this->db->query('select * from campeonato_escalaoetario
				// where id_campeonato='.$idactividade.' and descricao_escalao like "%'.$escalao->descricao_escalao.'%"')->result();

				foreach($generos as $genero){

					$data["$escalao->descricao_escalao"]["generos"]["$genero->genero"] = array(
						'id_campeonato_escalaoetario' => $genero->id_campeonato_escalaoetario,
						// 'descricao_escalao' => $genero->descricao_escalao,
						'genero' => $genero->genero,
						'categoriaPesos' => array()
					);

					$categoriaPesos = $this->db->query('SELECT descricao_categoriaPeso FROM `campeonato_categoriapeso`
					INNER JOIN campeonato_escalaoetario ON campeonato_categoriapeso.id_campeonatoescalao = campeonato_escalaoetario.id_campeonato_escalaoetario
					WHERE campeonato_categoriapeso.id_campeonatoescalao ='.$genero->id_campeonato_escalaoetario)->result();

					foreach($categoriaPesos as $categoriaPeso){

						$data["$escalao->descricao_escalao"]["generos"]["$genero->genero"]["categoriaPesos"]["$categoriaPeso->descricao_categoriaPeso"] = array(
							'descricao_categoriaPeso' => $categoriaPeso->descricao_categoriaPeso
						);

					}

				}

			}

			return $data;
		}
	}

	function getcategoriaPeso2($id_associacao = null, $idcampeonato = null, $idEvento = null){

		if($idcampeonato != 0){
			$query = $this->db->query('select id_campeonato from campeonato where id_associacao='.$id_associacao.' and fk_actividadeC='.$idEvento)->result()[0];
			$idactividade = $query->id_campeonato;


			$query = $this->db->query('select distinct(descricao_escalao) from campeonato_escalaoetario
			where id_campeonato='.$idactividade)->result();

			$data = array();
		
			foreach($query as $escalao){

				$data["$escalao->descricao_escalao"] = array(
					// 'id_campeonato_escalaoetario' => $escalao->id_campeonato_escalaoetario,
					// 'id_campeonato' => $escalao->id_campeonato,
					'descricao_escalao' => $escalao->descricao_escalao,
					'generos' => array()
				);

				$generos = $this->db->query('select * from campeonato_escalaoetario
				where id_campeonato='.$idactividade.' and descricao_escalao like "%'.$escalao->descricao_escalao.'%"')->result();

				foreach($generos as $genero){

					$data["$escalao->descricao_escalao"]["generos"]["$genero->genero"] = array(
						'id_campeonato_escalaoetario' => $genero->id_campeonato_escalaoetario,
						// 'descricao_escalao' => $genero->descricao_escalao,
						'genero' => $genero->genero,
						'categoriaPesos' => array()
					);

					$categoriaPesos = $this->db->query('SELECT descricao_categoriaPeso FROM `campeonato_categoriapeso`
					INNER JOIN campeonato_escalaoetario ON campeonato_categoriapeso.id_campeonatoescalao = campeonato_escalaoetario.id_campeonato_escalaoetario
					WHERE campeonato_categoriapeso.id_campeonatoescalao ='.$genero->id_campeonato_escalaoetario)->result();

					foreach($categoriaPesos as $categoriaPeso){

						$data["$escalao->descricao_escalao"]["generos"]["$genero->genero"]["categoriaPesos"]["$categoriaPeso->descricao_categoriaPeso"] = array(
							'descricao_categoriaPeso' => $categoriaPeso->descricao_categoriaPeso
						);

					}

				}

			}

			return $data;
		}
	}

	function getsistemadeluta($sistemaLuta){
		
       $query = $this->db->query('SELECT descricaosistemaluta FROM `campeonato_sistemadeluta` WHERE id_campeonato ='.$sistemaLuta)->result();

	   return $query;
	}

	function getgenero2($escalao, $id_campeonato){

		$query = $this->db->query('SELECT distinct(genero) FROM campeonato_escalaoetario WHERE id_campeonato='.$id_campeonato.' and descricao_escalao like "%'.$escalao.'%"')->result();

		return $query;

	}

	function categoriaPeso111($genero, $escalao, $id_campeonato){

		$query = $this->db->query('SELECT descricao_categoriaPeso FROM campeonato_categoriapeso 
		WHERE id_campeonatoescalao IN (SELECT id_campeonato_escalaoetario FROM campeonato_escalaoetario 
		WHERE id_campeonato='.$id_campeonato.' and descricao_escalao LIKE "%'.$escalao.'%" AND genero LIKE "%'.$genero.'%")')->result();

		return $query;

	}

	function categoriaPeso($genero, $escalao, $id_campeonato){

		$query = $this->db->query('SELECT DISTINCT(categoriaPeso) FROM participante_campeonato WHERE id_campeonato_fk='.$id_campeonato.' and escalao like "%'.$escalao.'%" and genero like "%'.$genero.'%"')->result();
		return $query;
		// $query = $this->db->query('SELECT descricao_categoriaPeso FROM campeonato_categoriapeso 
		// WHERE id_campeonatoescalao IN (SELECT id_campeonato_escalaoetario FROM campeonato_escalaoetario 
		// WHERE id_campeonato='.$id_campeonato.' and descricao_escalao LIKE "%'.$escalao.'%" AND genero LIKE "%'.$genero.'%")')->result();

		

	}

	public function verificarBilheteDuplicado($bihete){
		$query = $this->db->query('select * from participante_campeonato where bilhete_identidade like ')->result()[0];
	}

	function categoriaPeso3($genero, $escalao){

		if($escalao == "9056as34"){
			$query = $this->db->query('SELECT descricao_categoriaPeso FROM campeonato_categoriapeso 
			WHERE id_campeonatoescalao IN (SELECT id_campeonato_escalaoetario FROM campeonato_escalaoetario 
			WHERE descricao_escalao LIKE "%'.$escalao.'%" AND genero LIKE "%'.$genero.'%")')->result();
			return $query;

		}else{
			$query = $this->db->query('SELECT descricao_categoriaPeso FROM campeonato_categoriapeso 
			WHERE id_campeonatoescalao IN (SELECT id_campeonato_escalaoetario FROM campeonato_escalaoetario 
			WHERE descricao_escalao LIKE "%'.$escalao.'%" AND genero LIKE "%'.$genero.'%")')->result();
			return $query;

		}

	}

	function categoriaPeso5($genero, $escalao, $categoriaPeso, $idcampeonato){

		$query = $this->db->query('SELECT id_campeonato_categoriaPeso FROM campeonato_categoriapeso 
		WHERE descricao_categoriaPeso LIKE "%'.$categoriaPeso.'%" and id_campeonatoescalao IN (SELECT id_campeonato_escalaoetario FROM campeonato_escalaoetario 
		WHERE id_campeonato='.$idcampeonato.' and descricao_escalao LIKE "%'.$escalao.'%" AND genero LIKE "%'.$genero.'%")')->result()[0];

		return $query->id_campeonato_categoriaPeso;

	}

	function buscarAtletaClassificacao($genero, $categoriaPeso, $id_campeonato_fk, $escalao){

		$participantes = $this->db->query('SELECT * FROM participante_campeonato 
		WHERE id_campeonato_fk='.$id_campeonato_fk.' AND genero LIKE "%'.$genero.'%" AND escalao like "%'.$escalao.'%" AND categoriaPeso LIKE "%'.$categoriaPeso.'%"')->result();

		if(count($participantes) != null){
			return $participantes;
		}else{
			return 25;
		}

	}

	
	function getListaParticipanteNacionalAS(){
		$ano = date('Y');
		$query = $this->db->query('SELECT * FROM actividade2
		inner join campeonato on campeonato.fk_actividadeC = actividade2.id_actividade
		inner join campeonato_escalaoetario on campeonato_escalaoetario.id_campeonato = campeonato.id_campeonato
		inner join campeonato_categoriapeso on campeonato_categoriapeso.id_campeonatoescalao = campeonato_escalaoetario.id_campeonato_escalaoetario
		inner join classificacao_campeonato on classificacao_campeonato.id_categoriapeso = campeonato_categoriapeso.id_campeonato_categoriaPeso
		-- inner join posicaoclassificacao on posicaoclassificacao.id_classificacao_campeonato = classificacao_campeonato.id_classificacaoCampeonato
		where actividade2.ano_calendario ='.$ano.' and actividade2.id_associacao_pro <> 0')->result();

		return $query;

	}

	
	function layoutClassificacaoFinal($idcampeonato = null){
		
		$query = $this->db->query('select distinct(descricao_escalao) from campeonato_escalaoetario
		where id_campeonato='.$idcampeonato)->result();

		$data = array();
     
		foreach($query as $escalao){

			$data["$escalao->descricao_escalao"] = array(
				'descricao_escalao' => $escalao->descricao_escalao,
				'generos' => array()
			);

			$generos = $this->db->query('select distinct(genero) from campeonato_escalaoetario
			where descricao_escalao like "%'.$escalao->descricao_escalao.'%"')->result();

			foreach($generos as $genero){

				$data["$escalao->descricao_escalao"]["generos"]["$genero->genero"] = array(
					'genero' => $genero->genero,
					'categoriaPesos' => array()
				);

				
				$categoriaPesos = $this->db->query('SELECT * FROM campeonato_categoriapeso WHERE id_campeonatoescalao in
				(SELECT id_campeonato_escalaoetario FROM campeonato_escalaoetario WHERE id_campeonato='.$idcampeonato.' and descricao_escalao like "%'.$escalao->descricao_escalao.'%" and genero like "%'.$genero->genero.'%")')->result();

				foreach($categoriaPesos as $categoriaPeso){

					$data["$escalao->descricao_escalao"]["generos"]["$genero->genero"]["categoriaPesos"]["$categoriaPeso->descricao_categoriaPeso"] = array(
						'id_campeonato_categoriaPeso' => $categoriaPeso->id_campeonato_categoriaPeso,
						'descricao_categoriaPeso' => $categoriaPeso->descricao_categoriaPeso,
						'classificacaoFinals' => array()
					);

					// $classificacaoCamps = $this->db->query('SELECT * FROM classificacao_campeonato
					// WHERE id_categoriapeso ='.$categoriaPeso->id_campeonato_categoriaPeso)->result();

					$classificacaoFinals = $this->db->query('SELECT * FROM classificacao_campeonato
					inner join campeonato_categoriapeso on campeonato_categoriapeso.id_campeonato_categoriaPeso = classificacao_campeonato.id_categoriapeso
					inner join posicaoclassificacao on posicaoclassificacao.id_classificacao_campeonato = classificacao_campeonato.id_classificacaoCampeonato
					inner join participante_campeonato on participante_campeonato.id_participante_campeonato = posicaoclassificacao.id_participante
					where classificacao_campeonato.id_categoriapeso ='.$categoriaPeso->id_campeonato_categoriaPeso.' order by posicaoclassificacao.posicaoDes'
					)->result();

					foreach($classificacaoFinals as $classificacaoFinal){
					// echo json_encode($classificacaoFinal->name_participante);
							$data["$escalao->descricao_escalao"]["generos"]["$genero->genero"]["categoriaPesos"]["$categoriaPeso->descricao_categoriaPeso"]["classificacaoFinals"]["$classificacaoFinal->posicaoDes"] = array(
								'posicao' => $classificacaoFinal->posicaoDes,
								'name_participante' => $classificacaoFinal->name_participante,
								'provincia' => $classificacaoFinal->provincia,
								'imagem' => $classificacaoFinal->imagem
							);

					}



				}

			}

		}

		return $data;
	}

	function layoutClassificacaoProvinciaFinal($idcampeonato = null){
		
		$query = $this->db->query('select DISTINCT(provincia) from participante_campeonato
		where participante_campeonato.id_campeonato_fk ='.$idcampeonato)->result();

		$data = array();
		$i = 0;
     
		foreach($query as $provincia2){

			// $data["$provincia2->provincia"] = array(
			// 	'provincia' => $provincia2->provincia,
			// 	'medalhas' => array()
			// );

			

			$medalhas = $this->db->query('select count(posicaoDes) as posicaoDes from posicaoclassificacao
			inner join participante_campeonato on participante_campeonato.id_participante_campeonato = posicaoclassificacao.id_participante
			where provincia like "%'.$provincia2->provincia.'%" and participante_campeonato.id_campeonato_fk ='.$idcampeonato)->result();

			foreach($medalhas as $medalha){

				array_push($data, array("nome_provincia" => $provincia2->provincia,
										"nome_medalha" => $medalha->posicaoDes
									)
								);	

			};


			$medalhas2 = $this->db->query('select posicaoDes,count(*) as Qtd from posicaoclassificacao
								inner join participante_campeonato on participante_campeonato.id_participante_campeonato = posicaoclassificacao.id_participante
								where provincia like "%'.$provincia2->provincia.'%" and participante_campeonato.id_campeonato_fk ='.$idcampeonato.' GROUP BY posicaoDes')->result();

								$descMedalha = "";
if(count($medalhas2) == 3){
								foreach ($medalhas2 as $medalhasQt) {

									if($medalhasQt->posicaoDes == 1){
										$descMedalha = "Ouro";
									}elseif ($medalhasQt->posicaoDes == 2) {
										$descMedalha = "Prata";
									}else{
										$descMedalha = "Bronze";
									}

									array_push($data[$i], array(
                                            "Medalha" => array(
												"Descricao" => $descMedalha,
												"quantidade" => $medalhasQt->Qtd
												)
											)
									);

									// $data[$i] = 
								}
							}elseif(count($medalhas2) == 2){
								foreach ($medalhas2 as $medalhasQt) {

									if($medalhasQt->posicaoDes == 1){
										$descMedalha = "Ouro";
									}elseif ($medalhasQt->posicaoDes == 2) {
										$descMedalha = "Prata";
									}else{
										$descMedalha = "Bronze";
									}

									array_push($data[$i], array(
                                            "Medalha" => array(
												"Descricao" => $descMedalha,
												"quantidade" => $medalhasQt->Qtd
												)
											)
									);

									$retorno345 = $medalhasQt->posicaoDes;
								}

								// if($retorno345 == 1){
								// 	array_push($data[$i], array(
								// 		"Medalha" => array(
								// 			"Descricao" => "Bronze",
								// 			"quantidade" => "0"
								// 			)
								// 		)
								// 	);
								// }elseif (condition) {
								// 	array_push($data[$i], array(
								// 		"Medalha" => array(
								// 			"Descricao" => "Prata",
								// 			"quantidade" => "0"
								// 			)
								// 		)
								// 	);
								// }else{
								// 	array_push($data[$i], array(
								// 		"Medalha" => array(
								// 			"Descricao" => "Ouro",
								// 			"quantidade" => "0"
								// 			)
								// 		)
								// 	);
								// }

							}elseif(count($medalhas2) == 1){
								foreach ($medalhas2 as $medalhasQt) {

									if($medalhasQt->posicaoDes == 1){
										$descMedalha = "Ouro";
									}elseif ($medalhasQt->posicaoDes == 2) {
										$descMedalha = "Prata";
									}else{
										$descMedalha = "Bronze";
									}

							
									if($medalhasQt->posicaoDes == 1){

										array_push($data[$i], array(
                                            "Medalha" => array(
												"Descricao" => $descMedalha,
												"quantidade" => $medalhasQt->Qtd
												)
											)
										);

										array_push($data[$i], array(
                                            "Medalha" => array(
												"Descricao" => "Prata",
												"quantidade" => "0"
												)
											)
										);

										array_push($data[$i], array(
												"Medalha" => array(
													"Descricao" => "Bronze",
													"quantidade" => "0"
													)
												)
										);

									}elseif ($medalhasQt->posicaoDes == 2) {

										array_push($data[$i], array(
                                            "Medalha" => array(
												"Descricao" => "Ouro",
												"quantidade" => "0"
												)
											)
										);

										array_push($data[$i], array(
                                            "Medalha" => array(
												"Descricao" => $descMedalha,
												"quantidade" => $medalhasQt->Qtd
												)
											)
										);


										array_push($data[$i], array(
												"Medalha" => array(
													"Descricao" => "Bronze",
													"quantidade" => "0"
													)
												)
										);

									}else{
										array_push($data[$i], array(
                                            "Medalha" => array(
												"Descricao" => "Ouro",
												"quantidade" => "0"
												)
											)
										);

										array_push($data[$i], array(
												"Medalha" => array(
													"Descricao" => "Prata",
													"quantidade" => "0"
													)
												)
										);

										array_push($data[$i], array(
                                            "Medalha" => array(
												"Descricao" => $descMedalha,
												"quantidade" => $medalhasQt->Qtd
												)
											)
										);


									}

									

								}

							}else{

								array_push($data[$i], array(
									"Medalha" => array(
										"Descricao" => "Ouro",
										"quantidade" => "0"
										)
									)
								);
								array_push($data[$i], array(
									"Medalha" => array(
										"Descricao" => "Prata",
										"quantidade" => "0"
										)
									)
								);
								array_push($data[$i], array(
									"Medalha" => array(
										"Descricao" => "Bronze",
										"quantidade" => "0"
										)
									)
								);

							}

			$i++;
		};

		return ($data);
	}


	function layoutClassificacaoFinal99($idcampeonato = null){
		
		$query = $this->db->query('select * from campeonato_escalaoetario
		inner join campeonato_categoriapeso on campeonato_categoriapeso.id_campeonatoescalao = campeonato_escalaoetario.id_campeonato_escalaoetario
		inner join classificacao_campeonato on campeonato_categoriapeso.id_campeonato_categoriaPeso = classificacao_campeonato.id_categoriapeso
		inner join posicaoclassificacao on posicaoclassificacao.id_classificacao_campeonato = classificacao_campeonato.id_classificacaoCampeonato
		where campeonato_escalaoetario.id_campeonato ='.$idcampeonato)->result();

		return $query;

	}

	function getEscalaogenero555($id_Escalao = null, $id_campeonato = null){

		$query = $this->db->query('select genero from campeonato_escalaoetario where descricao_escalao = "'.$id_Escalao.'" and id_campeonato ='.$id_campeonato)->result();
		return $query;

	}

	function getInfoParticipanteCampeonato($id = null){

		$query = $this->db->query('select * from participante_campeonato where participante_campeonato.id_participante_campeonato ='.$id)->result();

		return $query;

	}

	function getCampeonatoCategoriaParti3($id = null){

		$query = $this->db->query('select distinct(descricao_categoriaPeso) from campeonato_categoriapeso 
		where id_campeonatoescalao in (SELECT id_campeonato_escalaoetario FROM campeonato_escalaoetario WHERE id_campeonato ='.$id.')')->result();

		return $query;

	}

	
	
	function getRelatorioFinal567($idcampeonato = null){
		
		$query = $this->db->query('select distinct(descricao_escalao) from campeonato_escalaoetario
		where id_campeonato='.$idcampeonato)->result();

		$data = array();
     
		// foreach($query as $escalao){

		// 	$data["$escalao->descricao_escalao"] = array(
		// 		'descricao_escalao' => $escalao->descricao_escalao,
		// 		'generos' => array()
		// 	);

		// 	$generos = $this->db->query('select distinct(genero) from campeonato_escalaoetario
		// 	where descricao_escalao like "%'.$escalao->descricao_escalao.'%"')->result();

		// 	foreach($generos as $genero){

		// 		$data["$escalao->descricao_escalao"]["generos"]["$genero->genero"] = array(
		// 			'genero' => $genero->genero,
		// 			'categoriaPesos' => array()
		// 		);

				
		// 		$categoriaPesos = $this->db->query('SELECT * FROM campeonato_categoriapeso WHERE id_campeonatoescalao in
		// 		(SELECT id_campeonato_escalaoetario FROM campeonato_escalaoetario WHERE id_campeonato='.$idcampeonato.' and descricao_escalao like "%'.$escalao->descricao_escalao.'%" and genero like "%'.$genero->genero.'%")')->result();

		// 		foreach($categoriaPesos as $categoriaPeso){

		// 			$data["$escalao->descricao_escalao"]["generos"]["$genero->genero"]["categoriaPesos"]["$categoriaPeso->descricao_categoriaPeso"] = array(
		// 				'id_campeonato_categoriaPeso' => $categoriaPeso->id_campeonato_categoriaPeso,
		// 				'descricao_categoriaPeso' => $categoriaPeso->descricao_categoriaPeso,
		// 				'classificacaoFinals' => array()
		// 			);

		// 			// $classificacaoCamps = $this->db->query('SELECT * FROM classificacao_campeonato
		// 			// WHERE id_categoriapeso ='.$categoriaPeso->id_campeonato_categoriaPeso)->result();

		// 			$classificacaoFinals = $this->db->query('SELECT posicaoDes,name_participante FROM classificacao_campeonato
		// 			inner join campeonato_categoriapeso on campeonato_categoriapeso.id_campeonato_categoriaPeso = classificacao_campeonato.id_categoriapeso
		// 			inner join posicaoclassificacao on posicaoclassificacao.id_classificacao_campeonato = classificacao_campeonato.id_classificacaoCampeonato
		// 			where classificacao_campeonato.id_categoriapeso ='.$categoriaPeso->id_campeonato_categoriaPeso.' order by posicaoclassificacao.posicaoDes'
		// 			)->result();

		// 			foreach($classificacaoFinals as $classificacaoFinal){
		// 			// echo json_encode($classificacaoFinal->name_participante);
		// 					$data["$escalao->descricao_escalao"]["generos"]["$genero->genero"]["categoriaPesos"]["$categoriaPeso->descricao_categoriaPeso"]["classificacaoFinals"]["$classificacaoFinal->posicaoDes"] = array(
		// 						'posicao' => $classificacaoFinal->posicaoDes,
		// 						'name_participante' => $classificacaoFinal->name_participante
		// 					);

		// 			}



		// 		}

		// 	}

		// }

		return $data;
	}



}

?>